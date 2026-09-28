# User Merge

[![Tests](https://github.com/phpbbmodders/phpbb-3.1-ext-usermerge/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-usermerge/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/phpbb-3.1-ext-usermerge/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-usermerge/actions/workflows/lint.yml)

Lets administrators merge two user accounts into one.

## Features

- **Merge Users** page under **ACP → Users and Groups**.
- Moves the old account's posts, topics, private messages, attachments, poll votes, reports, notifications and log entries to the new account, and adds up their post counts.
- Optionally keep the old account's registration date.
- The old account is deleted afterwards; a confirmation step comes first.
- Founders can't be merged except by founders; an account can't be merged into itself.

## Requirements

- phpBB 3.3.19 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/usermerge`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **User Merge** extension

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/phpbb-3.1-ext-usermerge/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Original extension by Rich McGirr ([RMcGirr83](https://github.com/rmcgirr83)) and Jari Kanerva (tumba25).
- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
