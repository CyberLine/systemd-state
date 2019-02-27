# systemd-state

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/CyberLine/systemd-state/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/CyberLine/systemd-state/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/CyberLine/systemd-state/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/CyberLine/systemd-state/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/CyberLine/systemd-state/badges/build.png?b=master)](https://scrutinizer-ci.com/g/CyberLine/systemd-state/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/cyberline/systemd-state/v/stable.svg)](https://packagist.org/packages/cyberline/systemd-state)
[![Total Downloads](https://poser.pugx.org/cyberline/systemd-state/downloads.svg)](https://packagist.org/packages/cyberline/systemd-state)
[![Latest Unstable Version](https://poser.pugx.org/cyberline/systemd-state/v/unstable.svg)](https://packagist.org/packages/cyberline/systemd-state)
[![License](https://poser.pugx.org/cyberline/systemd-state/license.svg)](https://packagist.org/packages/cyberline/systemd-state)

This package provides an object oriented way to access your systemd service state.

### Tested Versions
- Ubuntu: systemd 229
- Debian: systemd 215,232
- CentOS: systemd 219

### Usage

`composer require cyberline/systemd-state`

```
# get info about systemd itself:
$systemdState = new SystemdState;
$info = $systemdState->getSystemdInfo();
...

# get info about specific services:
$systemdState = new SystemdState;
$systemdState
    ->addCheckUnit('nginx');
    ->addCheckUnit('redis');
$info = $systemdState->getReport();
...

# get info from pregenerated file
# /bin/systemctl show * --no-pager > systemd.txt
$systemdState = new SystemdState;
$info = $systemdState
    ->checkFromString(file_get_contents('systemd.txt'))
    ->getReport();
...

# get info about all services:
$systemdState = new SystemdState;
$systemdState->addAllUnits();
$info = $systemdState->getReport();

```