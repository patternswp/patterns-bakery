/*CSS*/
/* global PatternsBakeryLocalize */
/* eslint-disable no-console */

import './index.scss';

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class PatternsBakerySettingsApi {
	constructor() {
		this.endpoint = 'patterns-bakery/v1/settings';
		this.nonce = PatternsBakeryLocalize.nonce;
		this.getSettings();
		this.bindEvents();
	}

	async getSettings() {
		try {
			const response = await apiFetch( {
				path: this.endpoint,
				headers: {
					'X-WP-Nonce': this.nonce,
				},
			} );
			this.settings = response;
			this.updateUI();
		} catch ( error ) {
			console.error( error );
		}
	}

	bindEvents() {
		document.addEventListener( 'click', ( event ) => {
			const target = event.target;
			if ( target.closest( '.patterns-bakery-gsn-close' ) ) {
				this.modifySettings( 'hide_get_started_notice', true );
			} else if (
				target.closest( '.patterns-bakery-rn-permanent-close' )
			) {
				this.modifySettings( 'remove_review_notice_permanently', true );
			} else if (
				target.closest( '.patterns-bakery-rn-temporary-close' )
			) {
				this.modifySettings(
					'remove_review_notice_temporary_date_time',
					1
				);
			} else {
				const installBtn = target.closest(
					'.patterns-bakery-install-plugins'
				);
				if ( installBtn ) {
					installBtn.classList.add( 'patterns-bakery-processing' );
					this.installPlugins();
				}
			}
		} );
	}
	async modifySettings( settingKey, settingValue, updateUi = true ) {
		const updatedSettings = {
			...this.settings,
			[ settingKey ]: settingValue,
		};
		try {
			const response = await apiFetch( {
				path: this.endpoint,
				method: 'POST',
				data: updatedSettings,
				headers: {
					'X-WP-Nonce': this.nonce,
				},
			} );
			this.settings = response;
			if ( updateUi ) {
				this.updateUI();
			}
		} catch ( error ) {
			console.error( error );
		}
	}

	isLoadReview() {
		const removeReviewNoticePermanently =
			this.settings.remove_review_notice_permanently;
		const removeReviewNoticeTemporaryDateTime =
			this.settings.remove_review_notice_temporary_date_time;
		const themeInstalledDateTime = this.settings.theme_installed_date_time;
		const currentDateTime = this.settings.current_date_time;
		const daysSinceInstallation =
			( currentDateTime - themeInstalledDateTime ) / ( 60 * 60 * 24 );

		if ( removeReviewNoticePermanently ) {
			return false;
		}

		if ( daysSinceInstallation < 15 ) {
			return false;
		}

		if ( ! removeReviewNoticeTemporaryDateTime ) {
			return true;
		}

		const daysSinceTemporary =
			( currentDateTime - removeReviewNoticeTemporaryDateTime ) /
			( 60 * 60 * 24 );

		if ( daysSinceTemporary < 15 ) {
			return false;
		}

		return true;
	}

	updateUI() {
		if ( this.settings.hide_get_started_notice ) {
			const noticeElement = document.getElementById(
				'patterns-bakery-gsn'
			);
			if ( noticeElement ) {
				noticeElement.remove();
			}
		}

		if ( ! this.isLoadReview() ) {
			const reviewNoticeElement = document.getElementById(
				'patterns-bakery-review-notice'
			);
			if ( reviewNoticeElement ) {
				reviewNoticeElement.remove();
			}
		}
	}
	async installPlugins() {
		const plugins = PatternsBakeryLocalize.recommended_plugins;
		if ( plugins && plugins.length ) {
			for ( const plugin of plugins ) {
				try {
					await apiFetch( {
						path: 'patterns-bakery/v1/install-plugin',
						method: 'POST',
						data: plugin,
						headers: {
							'X-WP-Nonce': this.nonce,
						},
					} );
				} catch ( error ) {
					console.error(
						`Failed to install plugin ${ plugin.name }:`,
						error
					);
				}
			}
		}
		await this.modifySettings( 'hide_get_started_notice', true, false );
		window.location.replace( PatternsBakeryLocalize.theme_info_url );
	}
}

document.addEventListener( 'DOMContentLoaded', () => {
	new PatternsBakerySettingsApi();
} );
