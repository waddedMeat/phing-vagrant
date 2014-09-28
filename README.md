# This is not the orginal project

Please send all issues to the [package maintainer](https://github.com/nickschuch/phing-vagrant)

-------------------------------------------

phing-vagrant
=======================


## Overview.

Provides a wrapper for vagrant. Primarily used for CI tasks.

## Installation.

```
        "require": {
        "waddedMeat/phing-vagrant": "dev-master"
    },
    "repositories": [
        {
            "url": "https://github.com/moranjk/phing-vagrant.git",
            "type": "git"
        }
    ]
```

To install the vagrant tasks you will need to either reimplement the example
build.xml in this project or import it. These instructions will help with
importing the build.xml.


To add these tasks, add the following to your projects build.xml:

```
<import file="vendor/moranjk/phing-vagrant/build.xml" optional="true" />
```

To test the targets have been implemented run (you will see the tasks):

```
vendor/bin/phing -l
```
