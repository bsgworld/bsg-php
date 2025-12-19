#!/bin/bash
# BSG SDK Generator
# Generates SDKs for multiple languages from OpenAPI specifications

set -e

GENERATOR_VERSION="v7.12.0"
WORKSPACE="/workspace"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

log() { echo -e "${GREEN}[SDK]${NC} $1"; }
warn() { echo -e "${YELLOW}[WARN]${NC} $1"; }
error() { echo -e "${RED}[ERROR]${NC} $1"; exit 1; }

# Common generator options
COMMON_OPTS="--global-property generateAliasAsModel=true,apiTests=false,modelTests=false,apiDocs=true,modelDocs=true"

generate() {
    local lang=$1
    local spec=$2
    local output=$3
    shift 3
    local props="$@"

    log "Generating $lang SDK from $spec..."

    docker run --rm \
        -v "$(pwd)":$WORKSPACE \
        openapitools/openapi-generator-cli:$GENERATOR_VERSION generate \
        -i "$WORKSPACE/$spec" \
        -g "$lang" \
        -o "$WORKSPACE/$output" \
        $COMMON_OPTS \
        $props

    log "$lang SDK generated in $output"
}

# =============================================================================
# PHP V1 - BSG API (Legacy)
# =============================================================================
generate_php_v1() {
    generate "php" \
        "openapi-specs/bsg-api-full.json" \
        "v1-generated" \
        -t "$WORKSPACE/templates" \
        --git-user-id "bsgworld" \
        --git-repo-id "bsg-php-v1" \
        -p "invokerPackage=BSG\\Api\\V1" \
        -p "packageName=BSG API PHP Client" \
        -p "composerPackageName=bsg/php-api-sdk-v1" \
        -p "artifactUrl=https://bsg.world/" \
        -p "licenseName=MIT" \
        -p "developerOrganization=BSG World" \
        -p "developerOrganizationUrl=https://bsg.world"

    # Move generated files
    rm -rf v1/lib v1/docs
    mv v1-generated/lib v1/
    mv v1-generated/docs v1/ 2>/dev/null || true
    cp v1-generated/composer.json v1/
    cp v1-generated/README.md v1/
    rm -rf v1-generated

    log "PHP V1 SDK ready in v1/"
}

# =============================================================================
# PHP V2 - One-API (Main)
# =============================================================================
generate_php_v2() {
    generate "php" \
        "openapi-specs/one-api-merged.json" \
        "v2-generated" \
        -t "$WORKSPACE/templates" \
        --git-user-id "bsgworld" \
        --git-repo-id "bsg-php" \
        -p "invokerPackage=BSG\\Api\\V2" \
        -p "packageName=BSG One-API PHP Client" \
        -p "composerPackageName=bsg/php-api-sdk" \
        -p "artifactUrl=https://bsg.world/" \
        -p "licenseName=MIT" \
        -p "developerOrganization=BSG World" \
        -p "developerOrganizationUrl=https://bsg.world"

    # Move generated files
    rm -rf v2/lib v2/docs
    mv v2-generated/lib v2/
    mv v2-generated/docs v2/ 2>/dev/null || true
    cp v2-generated/composer.json v2/
    cp v2-generated/README.md v2/
    rm -rf v2-generated

    log "PHP V2 SDK ready in v2/"
}

# =============================================================================
# Python
# =============================================================================
generate_python() {
    generate "python" \
        "openapi-specs/one-api-merged.json" \
        "python-generated" \
        --git-user-id "bsgworld" \
        --git-repo-id "bsg-python" \
        -p "packageName=bsg_api" \
        -p "projectName=bsg-api-sdk" \
        -p "packageVersion=1.0.0" \
        -p "packageUrl=https://github.com/bsgworld/bsg-python"

    log "Python SDK ready in python-generated/"
}

# =============================================================================
# TypeScript/JavaScript (Axios)
# =============================================================================
generate_typescript() {
    generate "typescript-axios" \
        "openapi-specs/one-api-merged.json" \
        "js-generated" \
        --git-user-id "bsgworld" \
        --git-repo-id "bsg-js" \
        -p "npmName=@bsg/api-sdk" \
        -p "npmVersion=1.0.0" \
        -p "supportsES6=true" \
        -p "withInterfaces=true"

    log "TypeScript SDK ready in js-generated/"
}

# =============================================================================
# Go
# =============================================================================
generate_go() {
    generate "go" \
        "openapi-specs/one-api-merged.json" \
        "go-generated" \
        --git-user-id "bsgworld" \
        --git-repo-id "bsg-go" \
        -p "packageName=bsgapi" \
        -p "moduleName=github.com/bsgworld/bsg-go" \
        -p "packageVersion=1.0.0"

    log "Go SDK ready in go-generated/"
}

# =============================================================================
# Main
# =============================================================================
usage() {
    echo "Usage: $0 [command]"
    echo ""
    echo "Commands:"
    echo "  php-v1      Generate PHP V1 SDK (BSG API)"
    echo "  php-v2      Generate PHP V2 SDK (One-API)"
    echo "  php         Generate both PHP SDKs"
    echo "  python      Generate Python SDK"
    echo "  typescript  Generate TypeScript SDK"
    echo "  go          Generate Go SDK"
    echo "  all         Generate all SDKs"
    echo "  list        List available generators"
    echo "  help <gen>  Show options for generator (e.g., help php)"
    echo ""
}

case "${1:-}" in
    php-v1)
        generate_php_v1
        ;;
    php-v2)
        generate_php_v2
        ;;
    php)
        generate_php_v1
        generate_php_v2
        ;;
    python)
        generate_python
        ;;
    typescript|ts|js)
        generate_typescript
        ;;
    go)
        generate_go
        ;;
    all)
        generate_php_v1
        generate_php_v2
        generate_python
        generate_typescript
        generate_go
        log "All SDKs generated!"
        ;;
    list)
        docker run --rm openapitools/openapi-generator-cli:$GENERATOR_VERSION list
        ;;
    help)
        if [ -z "${2:-}" ]; then
            usage
        else
            docker run --rm openapitools/openapi-generator-cli:$GENERATOR_VERSION config-help -g "$2"
        fi
        ;;
    *)
        usage
        ;;
esac
