# XML RPC Off Now

A lightweight WordPress plugin that disables XML-RPC functionality for improved security.

## Description

This plugin disables the XML-RPC functionality in WordPress by using the `xmlrpc_enabled` filter. XML-RPC can be used for brute-force attacks and other malicious purposes. Most WordPress sites do not require it anymore.

### Features

- Disables all XML-RPC functionality
- Shows a one-line admin notice (visible to administrators only, on the Dashboard)
- No settings, no bloat
- Lightweight and suitable for minimal or security-focused setups

## Requirements

- **WordPress**: 5.0 or higher
- **PHP**: 7.2 or higher
- **Tested up to**: WordPress 6.8.1

## Installation

1. Download the plugin files
2. Upload the plugin folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. That's it! XML-RPC is now disabled

## Frequently Asked Questions

### Can I re-enable XML-RPC later?

Yes, simply deactivate or uninstall this plugin.

### Does this affect the REST API?

No. The WordPress REST API remains fully functional.

## Screenshots

1. Admin notice shown only on the Dashboard

## Changelog

### Version 1.2
- Show admin notice for administrators only, on Dashboard

### Version 1.1
- Added admin notice

### Version 1.0
- Initial release – disables XML-RPC

## License

This plugin is licensed under the GPLv2 or later.
- License: [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)

## Credits

Maintained by **openzenta**. Suggestions and contributions welcome!

## Contributing

Feel free to submit issues, feature requests, or pull requests to help improve this plugin.

## Support

If you encounter any issues or have questions, please open an issue in this repository.
