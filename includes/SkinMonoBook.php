<?php
/**
 * MonoBook nouveau.
 *
 * Translated from gwicke's previous TAL template version to remove
 * dependency on PHPTAL.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Skins
 */

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @ingroup Skins
 */
class SkinMonoBookLegacy extends SkinTemplate {
	/** Using MonoBook. */
	public $skinname = 'monobooklegacy';
	public $stylename = 'MonoBookLegacy';
	public $template = 'MonoBookLegacyTemplate';

	/**
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.monobook.styles'
		] );

		// TODO: Migrate all of these (get RL support for conditional IE)
		// Force desktop styles in IE 8-; no support for @media widths
		$out->addStyle( $this->stylename . '/resources/screen-desktop.css', 'screen' );
		// Miscellanious fixes
		$out->addStyle( $this->stylename . '/resources/IE60Fixes.css', 'screen', 'IE 6' );
		$out->addStyle( $this->stylename . '/resources/IE70Fixes.css', 'screen', 'IE 7' );
	}
}
