hiqdev/hidev commits history
----------------------------

## 0.0.8 - Under development

- Changed .gitignore generation, now built from hashmap with comments
    - 52733f9 2015-07-12 improved .gitignore generation (sol@hiqdev.com)
    - 8600bf1 2015-07-12 + .gitignore smart generation (sol@hiqdev.com)
- Changed config: redone parent with plugins
    - c7fcc13 2015-07-12 fixed require at .hidev/config (sol@hiqdev.com)
    - 9524e62 2015-07-11 php-cs-fixed (sol@hiqdev.com)
    - 0c1619f 2015-07-11 * .hidev/config require to hidev-config-php only (sol@hiqdev.com)
    - 00d2fdf 2015-07-11 * initing: + create .hidev/vendor if not exists (sol@hiqdev.com)
    - dd5132a 2015-07-10 - run local hidev (sol@hiqdev.com)
    - 62c053e 2015-07-10 commits moved back to .hidev/commits.md (sol@hiqdev.com)
    - 8899ef1 2015-07-10 + Application::bootstrap() to load .hidev/vendor (sol@hiqdev.com)
    - 613e134 2015-07-10 redoing to .hidev/vendor (sol@hiqdev.com)
    - af65f57 2015-07-09 warning Running the file (sol@hiqdev.com)
    - cf2dd97 2015-07-09 improved initialization: + try ./bin/hidev (sol@hiqdev.com)
    - 496217f 2015-07-09 * composer.json generation: require-dev (sol@hiqdev.com)
    - 40b52c1 2015-07-09 improved running local bin (sol@hiqdev.com)
    - ab0ecae 2015-07-09 improved initialization, + localbin execution (sol@hiqdev.com)
    - 1d5fb22 2015-07-09 still redoing parent to plugins (sol@hiqdev.com)
    - 317f58c 2015-07-09 improved initialization (sol@hiqdev.com)
    - 212d220 2015-07-09 * CommitsHandler::renderDate minor fix (sol@hiqdev.com)
    - 445d4df 2015-07-08 php-cs-fixed (sol@hiqdev.com)
    - 57c98f1 2015-07-07 + require-dev (sol@hiqdev.com)
    - 327628e 2015-07-07 redone all initialization for pluggable parent config (sol@hiqdev.com)
    - 26f3f1e 2015-07-07 - AuthorGoal (sol@hiqdev.com)
- Changed source dir: moved to src
    - 39754c6 2015-07-09 great moving to src dir (sol@hiqdev.com)
- Added initial Getting started doc
    - 62c158d 2015-07-11 docs (sol@hiqdev.com)
    - 48b75d3 2015-07-10 * docs/GettingStarted.md (sol@hiqdev.com)
    - e06aa69 2015-07-04 Update GettingStarted.md (sol@hiqdev.com)
    - 13540c0 2015-07-04 Create GettingStarted.md (sol@hiqdev.com)
    - a4f2874 2015-07-05 Update GettingStarted.md (sol@hiqdev.com)
    - c7f0349 2015-07-05 Update GettingStarted.md (sol@hiqdev.com)
- Changed change log to follow keepachangelog.com recomendations
    - 1c354e3 2015-07-04 Changed change log to follow keepachangelog.com recomendations (sol@hiqdev.com)
    - 0610949 2015-07-04 added docs/BestPractices.md (sol@hiqdev.com)
    - 15e02ae 2015-07-04 changed CommitsHandler::renderDate for ISO date formatting (sol@hiqdev.com)
    - caa6c7f 2015-07-04 Update CHANGELOG.md (sol@hiqdev.com)
    - 98ee9c9 2015-07-04 Update CHANGELOG.md (sol@hiqdev.com)
- Changed roadmap
    - 2df0c08 2015-07-12 * ROADMAP (sol@hiqdev.com)
    - 918838a 2015-07-12 * ROADMAP (sol@hiqdev.com)
    - 3ab4873 2015-07-11 * ROADMAP (sol@hiqdev.com)
    - 0933afb 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 41012fc 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 5121836 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - b4d975a 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 0330b4b 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 38a2637 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 7407b96 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - d6d02d7 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
    - 8e45be6 2015-07-04 Update ROADMAP.md (sol@hiqdev.com)
- Added tests
    - 180477e 2015-06-30 + codeception.yml (sol@hiqdev.com)
- Added generate goal: generate file by template and params
    - 2235ef0 2015-07-03 * TemplateHandler: + pass file to template (sol@hiqdev.com)
    - 9de9f43 2015-06-30 + generate/mkdir action (sol@hiqdev.com)
    - 34d8231 2015-06-29 + GenerateGoal (sol@hiqdev.com)
    - 9e9784f 2015-06-29 small but good fix to extend from console\Controller <- base\Controller (sol@hiqdev.com)
- Added codeception plugin
    - 233d4be 2015-06-28 redone goals name -> goalName (sol@hiqdev.com)
    - e731acd 2015-06-28 crutched yaml rendering (sol@hiqdev.com)
    - 055defb 2015-06-28 + require plugins hidev-codeception/php-cs-fixer (sol@hiqdev.com)
- Changed config loading
    - e26d2b5 2015-06-27 redone File/Goal::exists (sol@hiqdev.com)
    - 76546e7 2015-06-27 * .hidev/config.yml: - composer.json config goes to composer.json (sol@hiqdev.com)
    - 1384678 2015-06-27 improved actionLoad in base/File and ComposerJsonGoal (sol@hiqdev.com)
    - f8996bc 2015-06-27 used module->runAction at actionDeps (sol@hiqdev.com)
    - e4882d4 2015-06-27 * ComposerJsonGoal + standart load (sol@hiqdev.com)
- Changed: redone goals like controllers
    - a0b4883 2015-07-11 removed old controllers/DefaultController (sol@hiqdev.com)
    - ed7537c 2015-06-30 + Application::runRequest (sol@hiqdev.com)
    - 37d11fa 2015-06-26 renamed actions to actionPerform/Make/... (sol@hiqdev.com)
    - c069025 2015-06-26 + parent/update action (sol@hiqdev.com)
    - cdcf25f 2015-06-24 php-cs-fixed (sol@hiqdev.com)
    - c4d8a63 2015-06-24 + getting default goal (sol@hiqdev.com)
    - 0888788 2015-06-24 redoing goals like controllers (sol@hiqdev.com)
    - bf724ab 2015-06-23 changelog (sol@hiqdev.com)
    - 32be392 2015-06-23 * roadmap (sol@hiqdev.com)

## 0.0.7 - 2015-06-19

- Changed composer.json: dont add empty require
    - fd344b8 2015-06-19 + delete require if empty (sol@hiqdev.com)
- Fixed code styling with php-cs-fixer
    - 9605650 2015-06-19 php-cs-fixed (sol@hiqdev.com)
- Added php-cs-fixer plugin
    - c87d8c7 2015-06-18 php-cs-fixing (sol@hiqdev.com)
    - af2097f 2015-06-18 + Helper::asplit (sol@hiqdev.com)
    - c71aa85 2015-06-18 - views/CHANGELOG.php cause it is not needed anymore (sol@hiqdev.com)
    - 7b79e7a 2015-06-18 php-cs-fixed (sol@hiqdev.com)
    - e155570 2015-06-18 + Twig_Extension_StringLoader for template_from_string (sol@hiqdev.com)
    - 8de7066 2015-06-18 php-cs-fixing (sol@hiqdev.com)
    - 492d5c3 2015-06-18 php-cs-fixing (sol@hiqdev.com)
    - 8eaa43f 2015-06-18 improving .php_cs (sol@hiqdev.com)
    - 67c5255 2015-06-17 inited .php_cs (sol@hiqdev.com)
- Added plugin archtecture
    - 26c9579 2015-06-17 doing plugin architecture (sol@hiqdev.com)
    - 7bacafa 2015-06-14 + skip Merge branch commits (sol@hiqdev.com)
- Fixed portability
    - 5350f2e 2015-06-14 improved portability (sol@hiqdev.com)
    - d48c5a1 2015-06-09 fixed adding new commits (sol@hiqdev.com)
    - 71a04c5 2015-06-09 * default package homepage to same as source (sol@hiqdev.com)
    - 0bca3e0 2015-06-07 small fixes (sol@hiqdev.com)

## 0.0.6 June 6, 2015

- Changed: GREAT RENAMING OF CLASSES
    - a9aed7b 2015-06-06 improved title, description, forum options at package/vendor (sol@hiqdev.com)
    - 3091450 2015-06-06 GREAT RENAMING OF CLASSES (sol@hiqdev.com)
- Added cool CHANGELOG.md generation
    - 75326d1 2015-06-06 fixed adding Under development tag (sol@hiqdev.com)
    - b7f0f9f 2015-06-05 improved skip minor (sol@hiqdev.com)
    - 3475a27 2015-06-05 rendering commits fixed (sol@hiqdev.com)
    - 8546f09 2015-06-05 + skip 'minor' commits at addHistory (sol@hiqdev.com)
    - 5474d01 2015-06-05 + handlers\Commits::renderLines (sol@hiqdev.com)
    - 54cf1f5 2015-06-05 + cool CHANGELOG.md generation (sol@hiqdev.com)
    - 8e6c700 2015-06-04 * default make for goals to load&save (sol@hiqdev.com)
    - 4af195c 2015-06-03 + getVcs() at base goal (sol@hiqdev.com)
    - 3ced3b8 2015-06-03 minor:roadmap (sol@hiqdev.com)
    - a23782b 2015-06-03 minor:commits (sol@hiqdev.com)
    - 569e582 2015-06-03 minor:commits (sol@hiqdev.com)
    - 133d4d4 2015-06-03 minor (sol@hiqdev.com)
    - 57a5beb 2015-06-03 Update commits.md (sol@hiqdev.com)
    - 1f5a9c3 2015-06-03 Update commits.md (sol@hiqdev.com)
    - 102434a 2015-06-03 Update commits.md (sol@hiqdev.com)
    - 7d8f7d1 2015-06-03 + .hidev/commits.md (sol@hiqdev.com)
- Added gen action to generate files by templates
    - feb986e 2015-06-02 + gen action to generate files by templates, changed way of looking for templates (sol@hiqdev.com)
- Added "No licence" default license
    - 1bfbeec 2015-06-02 + default license from vendor, + No license (sol@hiqdev.com)
    - 4a851f3 2015-06-01 * roadmap (sol@hiqdev.com)

## 0.0.5 June 1, 2015

- Changed decreased default verbosity
    - 5d56e27 2015-06-01 Decreased verbosity (sol@hiqdev.com)
    - dbc04c9 2015-06-01 fixed parent config cloning (sol@hiqdev.com)

## 0.0.4 June 1, 2015

- Added twig templates
    - 4078ac2 2015-06-01 BIG + twig (sol@hiqdev.com)

## 0.0.3 June 1, 2015

- Added YAML config
    - b80e4d4 2015-06-01 BIG + YAML, used for config (sol@hiqdev.com)
- Added ROADMAP.md
    - 13f6f30 2015-05-31 + ROADMAP.md (sol@hiqdev.com)

## 0.0.2 May 30, 2015

- Added parent config
    - 1182cdc 2015-05-30 + ignore .hidev/parent (sol@hiqdev.com)
- Added use of Robo (started robo integration)
- Changed namespace to 'hidev'
    - ed742a4 2015-05-30 HUGE + parent config HUGE * namespace beginned + Robo (sol@hiqdev.com)
    - 7817ae0 2015-05-29 added and used package.namespace for composer.json autoload used package/vendor instead of config->package/vendor (sol@hiqdev.com)
- Fixed different minor thing
    - 43150ff 2015-05-17 minor (sol@hiqdev.com)
    - de9f755 2015-05-16 * keywords (sol@hiqdev.com)
    - cf53e9a 2015-05-16 + default package description and homepage from vendor homepage (sol@hiqdev.com)
    - c8b508d 2015-05-15 * forum (sol@hiqdev.com)
    - 493da06 2015-05-15 + fullName, source getters (sol@hiqdev.com)
    - 6eb4fc4 2015-05-15 fixed (sol@hiqdev.com)
    - acd98f5 2015-05-14 renamed rawItem <- getRaw (sol@hiqdev.com)
    - a669a77 2015-05-14 - Config::_defaults (sol@hiqdev.com)
    - 8470ddc 2015-05-14 * composer requires to yii2 stable not dev (sol@hiqdev.com)

## 0.0.1 May 12, 2015

- Added MINIMUM DONE
- Added colorized console output
    - 98d97df 2015-05-12 + styled Console log output (sol@hiqdev.com)
    - 8813192 2015-05-12 simplified a bit, removed excessive set functions whose work is done automatically (sol@hiqdev.com)
    - d5968d9 2015-05-07 + own Application, Request + alises (sol@hiqdev.com)
    - a1d4db1 2015-05-05 minor (sol@hiqdev.com)
    - d9ad2cc 2015-05-04 + Application, ViewContext move into it from Config (sol@hiqdev.com)
    - bece54c 2015-05-04 minor (sol@hiqdev.com)
    - 09fb3b4 2015-05-04 redone to deps looks goog now (sol@hiqdev.com)
- Added README.md generation
- Added CHANGELOG.md generation
    - cf4564b 2015-05-02 MINIMUM DONE. URA (sol@hiqdev.com)
    - 303ac77 2015-05-02 rename homepage <- site (sol@hiqdev.com)
    - 9d801b9 2015-05-02 fixed: no comments after pattern (sol@hiqdev.com)
    - 67fbd14 2015-05-02 fixed: no comments after pattern (sol@hiqdev.com)
- Added composer.json generation
    - 4c5554e 2015-05-02 doing composer.json goal (sol@hiqdev.com)
    - 3101c68 2015-05-02 doing composer.json goal (sol@hiqdev.com)
- Added simple .gitignore generation
    - 006a0ab 2015-04-30 + .gitignore (sol@hiqdev.com)
    - 7675d1c 2015-04-30 + templates looking in .hidev/templates (sol@hiqdev.com)
- Added LICENSE generation
    - ad8d8d0 2015-04-30 improving LICENSE (sol@hiqdev.com)
    - e4b5cd2 2015-04-30 GREAT move ahead: now making LICENSE :) (sol@hiqdev.com)
    - 04777ec 2015-04-28 inited (sol@hiqdev.com)

## Development started April 28, 2015
