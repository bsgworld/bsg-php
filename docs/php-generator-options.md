# OpenAPI Generator — PHP Options

**v7.12.0** | [PHP Docs](https://openapi-generator.tech/docs/generators/php/) | [Global Properties](https://openapi-generator.tech/docs/globals/)

---

## Використання параметрів

**Config Options** — через `-p` або `--additional-properties`:

```bash
docker run --rm openapitools/openapi-generator-cli:v7.12.0 generate \
    -i openapi.json -g php -o ./generated \
    -p 'invokerPackage=BSG\Api\V2,composerPackageName=bsg/php-sdk,licenseName=MIT'

# або кожен окремо:
    --additional-properties=invokerPackage=BSG\Api\V2 \
    --additional-properties=composerPackageName=bsg/php-sdk
```

**Global Properties** — через `--global-property` або окремий флаг:

```bash
# через --global-property:
    --global-property=generateAliasAsModel=true,apiTests=false

# або окремим флагом:
    --generate-alias-as-model
```

---

## Global Properties

Глобальні параметри що впливають на всі генератори

| Параметр | Тип | Default | Опис |
|----------|-----|---------|------|
| **generateAliasAsModel** | bool | false | `--global-property generateAliasAsModel=true`<br>Генерувати класи для alias-типів (array, map). Якщо schema це `type: array` без `false` — клас не створюється, тільки type hint. З `true` — повноцінний клас `HlrBulkRequest`. |
| **apiTests** | bool | true | `--global-property apiTests=false`<br>Генерувати тести для API класів. Створює `test/Api/SmsApiTest.php` з заглушками. `false` — не генерувати (менше файлів). |
| **modelTests** | bool | true | `--global-property modelTests=false`<br>Генерувати тести для Model класів. Створює `test/Model/MessageTest.php`. Зазвичай не потрібні — це просто DTO. |
| **apiDocs** | bool | true | `--global-property apiDocs=false`<br>Генерувати документацію для API. Створює `docs/Api/SmsApi.md` з описом методів. `false` — якщо є своя документація. |
| **modelDocs** | bool | true | `--global-property modelDocs=false`<br>Генерувати документацію для моделей. Створює `docs/Model/Message.md` з таблицею полів. |
| **verbose** | bool | false | `--global-property verbose=true`<br>Детальний вивід логів. Показує кожен згенерований файл та рішення генератора. Корисно для debug. |

---

## PHP Config Options

Параметри специфічні для PHP генератора

### Namespace та Package

| Параметр | Тип | Опис |
|----------|-----|------|
| **invokerPackage** | string | `-p 'invokerPackage=BSG\Api\V2'`<br>Кореневий namespace для всіх класів. → `BSG\Api\V2\Api\SmsApi`, `BSG\Api\V2\Model\Message`, `BSG\Api\V2\Configuration` |
| **composerPackageName** | string | `-p 'composerPackageName=bsg/sdk'`<br>Назва пакету для composer.json (vendor/package). → `"name": "bsg/sdk"` — те, що пишуть в `composer require bsg/sdk` |
| **packageName** | string | `-p 'packageName=BSG API Client'`<br>Людська назва пакету для README. → `# BSG API Client` — заголовок README.md |
| **apiPackage** | string | `-p 'apiPackage=Services'`<br>Під-namespace для API класів. За замовчуванням `Api` → `BSG\Api\V2\Api\SmsApi`. Якщо `Services` → `BSG\Api\V2\Services\SmsApi` |
| **modelPackage** | string | `-p 'modelPackage=DTO'`<br>Під-namespace для Model класів. За замовчуванням `Model`. Якщо `DTO` → `BSG\Api\V2\DTO\Message` |

### Composer.json

| Параметр | Тип | Опис |
|----------|-----|------|
| **artifactUrl** | string | `-p 'artifactUrl=https://bsg.world/'`<br>Homepage в composer.json. → `"homepage": "https://bsg.world/"` — посилання на Packagist |
| **artifactVersion** | string | `-p 'artifactVersion=1.0.0'`<br>Версія пакету (зазвичай не потрібно). Composer бере версію з git tag, цей параметр для README/docs. |
| **licenseName** | string | `-p 'licenseName=MIT'`<br>Ліцензія для composer.json. → `"license": "MIT"` — SPDX ідентифікатор (MIT, Apache-2.0, GPL-3.0) |
| **developerOrganization** | string | `-p 'developerOrganization=BSG World'`<br>Автор/організація в composer.json. → `"authors": [{"name": "BSG World"}]` |
| **developerOrganizationUrl** | string | `-p 'developerOrganizationUrl=https://bsg.world'`<br>URL автора в composer.json. → `"authors": [{"homepage": "https://bsg.world"}]` |

### HTTP та структура

| Параметр | Тип | Default | Опис |
|----------|-----|---------|------|
| **library** | string | guzzle | `-p 'library=psr-18'`<br>HTTP клієнт для запитів. `guzzle` — жорстка залежність на Guzzle 7. `psr-18` — будь-який PSR-18 клієнт (Symfony, Buzz, etc). |
| **srcBasePath** | string | lib | `-p 'srcBasePath=src'`<br>Директорія для згенерованого коду. `lib` → `lib/Api/`, `lib/Model/`. `src` → `src/Api/`, `src/Model/` |

### Стиль коду

| Параметр | Тип | Default | Опис |
|----------|-----|---------|------|
| **variableNamingConvention** | string | snake_case | `-p 'variableNamingConvention=camelCase'`<br>Стиль іменування змінних в коді. `snake_case` → `$user_name`. `camelCase` → `$userName`. PSR-12 рекомендує camelCase. |
| **hideGenerationTimestamp** | bool | true | `-p 'hideGenerationTimestamp=false'`<br>Приховати timestamp в згенерованих файлах. `true` — чистіший git diff (немає змін дати при перегенерації). `false` — додає коментар коли згенеровано. |

### Сортування параметрів

| Параметр | Тип | Default | Опис |
|----------|-----|---------|------|
| **sortParamsByRequiredFlag** | bool | true | `-p 'sortParamsByRequiredFlag=false'`<br>Сортувати параметри методів: required першими. `true` → `send($to, $text, $from = null)`. `false` — порядок як в OpenAPI spec. |
| **sortModelPropertiesByRequiredFlag** | bool | true | `-p 'sortModelPropertiesByRequiredFlag=false'`<br>Сортувати властивості моделей: required першими. Впливає на порядок у конструкторі та документації. `false` — порядок як в OpenAPI schema. |
| **ensureUniqueParams** | bool | true | `-p 'ensureUniqueParams=false'`<br>Гарантувати унікальність імен параметрів. Якщо в path і query є `id` — додасть суфікс: `$id`, `$id2`. Рідко потрібно вимикати. |
| **prependFormOrBodyParameters** | bool | false | `-p 'prependFormOrBodyParameters=true'`<br>Body/form параметри на початку сигнатури. `false` → `create($id, $body)`. `true` → `create($body, $id)`. Зазвичай не потрібно. |

### Поведінка схем

| Параметр | Тип | Default | Опис |
|----------|-----|---------|------|
| **legacyDiscriminatorBehavior** | bool | true | `-p 'legacyDiscriminatorBehavior=false'`<br>Стратегія обробки discriminator для oneOf/anyOf. `true` — старий стиль (всі варіанти в одному класі). `false` — сучасний (окремі класи + interface). Для OAS 3.x краще `false`. |
| **disallowAdditionalPropertiesIfNotPresent** | bool | true | `-p 'disallowAdditionalPropertiesIfNotPresent=false'`<br>Поведінка additionalProperties якщо не вказано в schema. `true` — заборонити додаткові поля. `false` — дозволити (як в JSON Schema spec). Якщо API повертає невідомі поля — ставте `false`. |
| **enumUnknownDefaultCase** | bool | false | `-p 'enumUnknownDefaultCase=true'`<br>Додати fallback для невідомих enum значень. `true` → enum матиме `UNKNOWN_DEFAULT_OPEN_API`. Корисно якщо API може повернути нове значення enum, яке SDK ще не знає. |
| **allowUnicodeIdentifiers** | bool | false | `-p 'allowUnicodeIdentifiers=true'`<br>Дозволити Unicode в іменах (змінних, класів). Якщо OpenAPI має `статус` — з `false` перейменує на `status`, з `true` залишить `$статус`. Зазвичай не потрібно. |

---

## Related Links

- [PHP Generator](https://openapi-generator.tech/docs/generators/php/)
- [Global Properties](https://openapi-generator.tech/docs/globals/)
- [GitHub](https://github.com/OpenAPITools/openapi-generator)
- [BSG PHP SDK](README.md)

---

*BSG PHP SDK*
