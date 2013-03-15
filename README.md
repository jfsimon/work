My working tool
===============

Commands
--------

**Open/switch issue branch**: `work issue <id> [<base>] [<subject>]`

    *  Cleans current issue (stash code)
    *  If issue exists: checkout it, sync data, pop stash if any, change subject/base if given
    *  If issue is new: creates it and sync data

**Commit issue code**: `work commit <message> [<subject>] [-p]`

    *  Commits code with given message, tags message with known subject or given one if any
    *  If `-p` flag given, pushes on distant repository

**Synchronize issues**: `work sync`

    *  Sync current issue info with github

**Show issues status**: `work status [<id>]`

    *  If no id given: displays the list of isssues with their state
    *  If id is given: displays full info about it

**Clean repository**: `work clean [<ids>]`

    *  Removes all closed issues on local repo
    *  Removes all closed issues on distant repo

**Clean repository**: `work rebase`

    *  Rebases
