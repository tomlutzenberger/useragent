
# useragent.codes

[![Releases](https://img.shields.io/github/release/tomlutzenberger/useragent/all.svg)](https://github.com/tomlutzenberger/useragent/releases)
[![NSP Status](https://nodesecurity.io/orgs/tomlutzenberger/projects//fca7e226-450f-4807-a43b-da1a77afec4d/badge)](https://nodesecurity.io/orgs/tomlutzenberger/projects//fca7e226-450f-4807-a43b-da1a77afec4d)
[![David](https://img.shields.io/david/tomlutzenberger/useragent.svg)]()
[![David Dev](https://img.shields.io/david/dev/tomlutzenberger/useragent.svg?label=devDep)]()

## What is _useragent.codes_ ?

A small and easy but useful webservice to identify user-agents (browsers). I created it because I needed to identify browser + OS on another project. Browscap was not possible to use, because it gives you a 73MB JSON (minified). Not a good choice for a JavaScript-only frontend project.


## Why do I need it?

Have you (as a developer) ever tried to identify you browser & OS via `navigator.useragent` by yourself?
You have to parse this string and often it looks very different on various browsers and systems.

Believe me, you don't want to do this by yourself. **It sucks**.


## How does it work?

**It's simple:**
I used [UA-Parser's PHP implementation](https://github.com/ua-parser/uap-php) and put it on a server. It returns a JSON string with all the available information.


## How do I use it?

Just request [https://useragent.codes/get](https://useragent.codes/get) and the response will look something like this:

```json
{
  "info":{
    "name":"useragent.codes",
    "version":"v0.1"
  },
  "browser":{
    "fullName":"Chrome 59.0.3071",
    "name":"Chrome",
    "version":"59.0.3071",
    "major":"59",
    "minor":"0",
    "patch":"3071"
  },
  "system":{
    "fullName":"Windows 10",
    "name":"Windows 10",
    "version":"",
    "major":null,
    "minor":null,
    "patch":null,
    "patchMinor":null
  },
  "device":{
    "brand":null,
    "model":null,
    "family":"Other"
  }
}
```

---

Made with ❤

A Project by [Tom Lutzenberger](https://tomlutzenberger.de)
