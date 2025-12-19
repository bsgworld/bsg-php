# BSG PHP SDK Monorepo

Complete Documentation for V1 (BSG API) and V2 (One-API)

## Quick Navigation

- [Overview](#overview)
- [Repository Structure](#repository-structure)
- [Naming Convention](#naming-convention)
- [API Hosts](#api-hosts)
- [Development Commands](#development-commands)
- [Git Workflow](#git-workflow)
- [GitHub Actions](#github-actions---auto-split)
- [SDK Generation](#sdk-generation)
- [Generator Options Reference](php-generator-options.md)
- [Installation](#sdk-installation)
- [Usage Examples](#usage-examples)
- [Testing](#testing-sdk)

---

## Packages

| Package | Namespace | Description |
|---------|-----------|-------------|
| `bsg/php-api-sdk-v1` | `BSG\Api\V1\` | Legacy API for SMS, Viber, HLR, MNP services |
| `bsg/php-api-sdk` | `BSG\Api\V2\` | Unified API for all messengers |

---

## Overview

This is a monorepo for BSG World PHP SDK libraries. It contains two separate SDKs for different APIs:

- **V1 (BSG API)** - Legacy API for SMS, Viber, HLR, MNP services
- **V2 (One-API)** - New unified API for all messengers

---

## Repository Structure

```
bsg-php/
├── .github/
│   └── workflows/
│       └── split.yml               # Auto-split to separate repos
├── .claude/
│   └── CLAUDE.md                   # Claude Code context
├── docs/
│   ├── index.html                  # This documentation
│   └── php-generator-options.html  # PHP generator options reference
├── openapi-specs/                  # OpenAPI specs for SDK generation
│   ├── bsg-api-full.json           # V1 BSG API (~672KB)
│   └── one-api-merged.json         # V2 One-API (~1.4MB)
├── templates/                      # Custom Mustache templates
│   ├── README.mustache             # README template
│   ├── api_doc.mustache            # API docs template
│   └── model_doc.mustache          # Model docs template
├── v1/                             # BSG API SDK (bsg/php-api-sdk-v1)
│   ├── composer.json
│   ├── README.md
│   └── lib/
│       ├── Api/                    # SMSApi, ViberApi, HLRApi, MNPApi...
│       ├── Model/                  # DTO classes
│       └── Configuration.php
├── v2/                             # One-API SDK (bsg/php-api-sdk)
│   ├── composer.json
│   ├── README.md
│   └── lib/
│       ├── Api/                    # AccountApi, SmsCampaignsApi...
│       ├── Model/                  # DTO classes
│       └── Configuration.php
├── composer.json                   # Monorepo orchestrator
├── .gitignore
├── LICENSE
└── README.md
```

---

## Naming Convention

### Composer Packages

| Package | Repository | Description |
|---------|------------|-------------|
| `bsg/php-sdk-monorepo` | bsgworld/bsg-php | Monorepo (dev) |
| `bsg/php-api-sdk` | bsgworld/php-api-sdk | One-API V2 (production) |
| `bsg/php-api-sdk-v1` | bsgworld/php-api-sdk-v1 | BSG API V1 (production) |

### Namespaces

- **V1:** `BSG\Api\V1\` (Configuration, Api\*, Model\*)
- **V2:** `BSG\Api\V2\` (Configuration, Api\*, Model\*)

### Future SDKs (naming pattern)

- `bsg/js-api-sdk` - JavaScript/TypeScript
- `bsg/python-api-sdk` - Python
- `bsg/go-api-sdk` - Go

---

## API Hosts

| SDK | Production Host | Documentation |
|-----|-----------------|---------------|
| V1 - BSG API | `https://api.bsg.world` | [bsg.world/developers](https://bsg.world/developers) |
| V2 - One-API | `https://one-api.bsg.world` | [bsg.world/developers](https://bsg.world/developers) |

---

## Development Commands

### Install Dependencies

```bash
composer install
```

### Run Tests

```bash
# All tests
./vendor/bin/phpunit

# V1 SDK tests only
./vendor/bin/phpunit v1/tests/

# V2 SDK tests only
./vendor/bin/phpunit v2/tests/

# Single test file
./vendor/bin/phpunit v1/tests/Model/BalanceResponseTest.php
```

### Code Style (PHP CS Fixer)

```bash
# Check style
./vendor/bin/php-cs-fixer fix --dry-run

# Auto-fix
./vendor/bin/php-cs-fixer fix
```

---

## Git Workflow

### Branches

- `master` - legacy code, tag v0.1.0
- `monorepo` - **active branch** with new structure
- `main` - may be outdated, use `monorepo`

### Tags

- `v0.1.0` - legacy on master
- `v1.0.0-beta` - first monorepo release (to be created)

---

## GitHub Actions - Auto-split

The file `.github/workflows/split.yml` automatically splits the monorepo into separate repositories when tags are created.

### How it works:

1. Push a tag (e.g., `v1.0.0`) to `bsgworld/bsg-php`
2. GitHub Action starts
3. `v1/` is copied to `bsgworld/php-api-sdk-v1` with the same tag
4. `v2/` is copied to `bsgworld/php-api-sdk` with the same tag

### Requirements:

- Create repositories `bsgworld/php-api-sdk` and `bsgworld/php-api-sdk-v1` on GitHub
- Add secret `SPLIT_TOKEN` with Personal Access Token (repo scope)

---

## SDK Generation

### OpenAPI Specifications

Specifications for SDK generation are located in `openapi-specs/`:

- `bsg-api-full.json` - V1 BSG API (SMS, Viber, HLR, MNP)
- `one-api-merged.json` - V2 One-API (unified API)

### OpenAPI Generator Versions

- `v7.10.0` → PHP 7.4+ | PHP 8.0 (recommended)
- `v7.12.0` → PHP 7.4+ | PHP 8.0 (used)
- `v7.17.0` → PHP 8.1+ (latest, October 2025)

### Generate V1 SDK (BSG API)

Run from monorepo root:

```bash
docker run --rm \
    -v "$(pwd)":/workspace \
    openapitools/openapi-generator-cli:v7.12.0 generate \
    -i /workspace/openapi-specs/bsg-api-full.json \
    -g php \
    -o /workspace/v1-generated \
    -t /workspace/templates \
    --git-user-id "bsg" \
    --git-repo-id "php-api-sdk-v1" \
    -p 'invokerPackage=BSG\Api\V1' \
    -p 'packageName=BSG API PHP Client' \
    -p 'composerPackageName=bsg/php-api-sdk-v1' \
    -p 'artifactUrl=https://bsg.world/' \
    -p 'licenseName=MIT' \
    -p 'developerOrganization=BSG World' \
    -p 'developerOrganizationUrl=https://bsg.world' \
    --global-property generateAliasAsModel=true

# Move generated files
rm -rf v1/lib && mv v1-generated/lib v1/
cp v1-generated/composer.json v1/
cp v1-generated/README.md v1/
rm -rf v1-generated
```

### Generate V2 SDK (One-API)

Run from monorepo root:

```bash
docker run --rm \
    -v "$(pwd)":/workspace \
    openapitools/openapi-generator-cli:v7.12.0 generate \
    -i /workspace/openapi-specs/one-api-merged.json \
    -g php \
    -o /workspace/v2-generated \
    -t /workspace/templates \
    --git-user-id "bsg" \
    --git-repo-id "php-api-sdk" \
    -p 'invokerPackage=BSG\Api\V2' \
    -p 'packageName=BSG One-API PHP Client' \
    -p 'composerPackageName=bsg/php-api-sdk' \
    -p 'artifactUrl=https://bsg.world/' \
    -p 'licenseName=MIT' \
    -p 'developerOrganization=BSG World' \
    -p 'developerOrganizationUrl=https://bsg.world' \
    --global-property generateAliasAsModel=true

# Move generated files
rm -rf v2/lib && mv v2-generated/lib v2/
cp v2-generated/composer.json v2/
cp v2-generated/README.md v2/
rm -rf v2-generated
```

### Generator Parameters

See [PHP Generator Options](php-generator-options.md) for full list with detailed descriptions.

| Parameter | Description | Example |
|-----------|-------------|---------|
| `invokerPackage` | Root namespace for PHP classes | `BSG\Api\V1` |
| `composerPackageName` | Package name in composer.json | `bsg/php-api-sdk-v1` |
| `artifactUrl` | Homepage URL for composer.json | `https://bsg.world/` |
| `licenseName` | License identifier | `MIT` |
| `-t` | Custom templates directory | `/workspace/templates` |
| `--global-property generateAliasAsModel` | Generate classes for alias types (array) | `true` |

---

## SDK Installation

### Method 1: From Monorepo (dev)

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:bsgworld/bsg-php.git"
        }
    ],
    "require": {
        "bsg/php-sdk-monorepo": "dev-monorepo"
    },
    "minimum-stability": "dev"
}
```

### Method 2: Split Packages (production)

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:bsgworld/php-api-sdk-v1.git"
        }
    ],
    "require": {
        "bsg/php-api-sdk-v1": "^1.0"
    }
}
```

### Method 3: Packagist (after registration)

```bash
composer require bsg/php-api-sdk        # One-API V2
composer require bsg/php-api-sdk-v1     # BSG API V1
```

---

## Usage Examples

### V1 - BSG API

```php
<?php
require 'vendor/autoload.php';

use BSG\Api\V1\Configuration;
use BSG\Api\V1\Api\SMSApi;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.bsg.world')
    ->setApiKey('X-API-KEY', 'your-api-key');

$sms = new SMSApi(null, $config);
$prices = $sms->smsGetPrices();
```

### V2 - One-API

```php
<?php
require 'vendor/autoload.php';

use BSG\Api\V2\Configuration;
use BSG\Api\V2\Api\AccountApi;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://one-api.bsg.world')
    ->setApiKey('X-API-KEY', 'your-api-key');

$account = new AccountApi(null, $config);
$balance = $account->accountBalance();
```

---

## Testing SDK

### Create Test Project

```bash
mkdir ~/test-bsg-sdk && cd ~/test-bsg-sdk

cat > composer.json << 'EOF'
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:bsgworld/bsg-php.git"
        }
    ],
    "require": {
        "bsg/php-sdk-monorepo": "dev-monorepo"
    },
    "minimum-stability": "dev"
}
EOF

composer update

cat > test.php << 'EOF'
<?php
require 'vendor/autoload.php';

use BSG\Api\V1\Configuration;
use BSG\Api\V2\Configuration as ConfigV2;

echo "V1 Configuration: " . (class_exists(Configuration::class) ? "OK" : "FAIL") . "\n";
echo "V2 Configuration: " . (class_exists(ConfigV2::class) ? "OK" : "FAIL") . "\n";
EOF

php test.php
```

---

## Related Links

- [PHP Generator Options](php-generator-options.md) - Full parameter reference
- [GitHub Organization](https://github.com/bsgworld)
- [Website](https://bsg.world)
- [Developer Docs](https://bsg.world/developers)
- [Support](mailto:support@bsg.world)

---

**Requirements:** PHP ^7.4 || ^8.0 • ext-curl • ext-json • ext-mbstring • guzzlehttp/guzzle ^7.3

---

© 2025 BSG World • [bsg.world](https://bsg.world)
