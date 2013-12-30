phing-vagrant
=======================

## Overview.

Provides a wrapper for vagrant. Primarily used for CI tasks.

## Installation.

To install the vagrant tasks you will need to either reimplement the example
build.xml in this project or import it. These instructions will help with
importing the build.xml.

We are going to assume a build.xml has already been setup and this project has
been checked out into:

```
vendor/nickschuch/phing-vagrant
```

To add these tasks, add the following to your projects build.xml:

```
<includepath classpath="vendor/pnx/scaffold" />
<import file="vendor/nickschuch/phing-vagrant/build.xml" optional="true" />
```

To test the targets have been implemented run (you will see the tasks):

```
phing -l
```
