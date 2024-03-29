# Read Me Big Dummy Project

# ARCHIVED 2023
This repository was created for an exercise in using PHP tools as described below under the heading 'Purpose'.
I have now archived it so that it is still available to read, but not maintained.

## Purpose
Provide an ultra simple PHP project to explore best practices. Currently
implemented are:
* PSR 1,2,3,4
* The use of linters (phpcs and phpmd) to help adhere to standards
* Documentation derived from comments in the code
* Ability to use Test Driven Development by means of the PhpUnit testing framework
* The use of a dependency manager (Composer) to handle external packages

While this project is not a useful PHP application, it is a working PHP
application that makes use of useful tools to make a medium to large project
manageable. It can be used as a ready made start for new projects.

It contains a single class with two methods. It is namespaced, the namespace
may be changed by
* change the namespace in all your source files
* edit the autoload section of composer.json.
* cd to the project top level directory and enter the following command:
* composer.phar dump-autoload -o

This assumes the path to composer.phar is in your path.

# To Build the App
```bash
 git clone https://github.com/paleo9/big-dummy.git
 cd bigdummy
 composer.phar dump-autoload -o
 composer update
 ./vendor/bin/phpdoc -d App/Classes -t Documentation
```

## Best practices - TDD (Test Driven Development)

The project is set up to use Test Driven Development
* TDD forces the developer to write tests before writing a line of code
* It is easier to write tests that are highly focussed
* there is a one-to-one relationship with between the methods in the tests and
  the methods in the code
* therefore code comes out short and highly focussed.

Using methods with a few lines of code is usually a Good Thing
* cyclic complexity numbers stay low
* WTF count stays low

## Running the tests
```bash
phpunit --bootstrap App/Classes/*.php  App/tests/ --colors=always
```
## Creating the documentation
```bash
phpdoc -d ./App/Classes -t ./documentation
```

## Questions

### Over a thousand directories for a quick demo - are you kidding?
After composer has installed the project's dependencies, there will be
over a thousand directories. The demo itself contains only two subdirectories,
'Classes' and 'tests', the rest are created by the of development libraries, in
particular phpunit and phpdoc, these will not appear in production.

If you would like to see the complete directory tree after the dependencies
have been downloaded, take a look at 'project-directory-tree.txt'.

### There are a lot of comments, how much time does it waste?
The comments are written in a format that makes it possible to produce
developer documentation automatically in seconds. The documentation can be
html, pdf and more. They are mainly boiler-plate with only a small amount of
new text, for example the description of each file or class, method.

Good editors/IDEs can be set up to produce the bulk of the comment, leaving the
developer to just fill in the important parts of what it does and any special
considerations. The comment helps to focus the developer's mind on the
requirements of the class, method, parameter etc.

Code is read more often than it is written, so the real benefit comes in
afterwards when time comes to refine or add new functionality.

### Which packages were chosen?
Packages to manage the following functions were specifically used:
* unit testing (PhpUnit)
* documentation (PhPDocumentor)
* debugging (XDebug)
* logging (monolog)
* syntax and style checkers (phpcs and phpmd)

A dependency manager 'composer' was chosen as it is in common usage within PHP
projects and was already in use for PRS-4 autoloading.
