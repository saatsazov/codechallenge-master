# Sched Coding Challenge:

### Goal

You will be creating an event page (schedule) that has a list of sessions (schedule items). Each of the sessions has speakers who will be presenting. Your job is to combine the speaker and session data, sort the sessions alphabetically based on the speaker's last name, and output the list in any way that you desire (console, HTML, etc). Include at least the session name, the speaker(s) name, and session start/end time.
The goal is to simulate accessing data from a database, serializing the information, manipulating the data, and outputting the data in any format.

### Language

While we'd love to give you the option to use *any* language, we don't have enough (human) bandwidth to review solutions written in Lisp or Malbolge. You can pick any language as long as its PHP, Javascript, Python, Ruby or Golang. PHP gets priority, as most of our codebase is written in PHP. We also prefer objective oriented over procedural and functional programming.

### Data

The input data is provided in 3 SQL dump files: `session.sql`, `role.sql` and `user.sql`. The session data, including session unique IDs is contained in the `session.sql` file. The user profiles, including user unique IDs is in the `user.sql` file. Finally, the `role.sql` file contains session-to-user mappings. MySQL is the preferred RDBMS for this project. The data is pretty simple, but take a look to familiarize yourself with it.

### Gotchas

Sessions can be active (published), or inactive (unpublished). Filter the non-active sessions out from the final data set. Note also, that speakers are not the only role a user can have. Finally, speakers may not all have last names. Maybe there are others?

### Example output data

```
Session Foo - Mar 1st 2018 10:50am-12:30pm
  - Adam Adams
  - John Doe

Session Bar - Mar 1st 2018 12:30pm-1:30pm
  - Buggy Bugowsky

Session Baz - Feb 28th 2018 12:30pm-1:30pm
  - Sandra Clinton
```

### Requirements

All tools that you would use in your day to day job are fair game. Google is your friend. Take three simulated Database dumps (Sessions, Speakers, Join table) which are stored in the repo as SQL files. Combine the data and sort these sessions by the speaker's last name. Your output does not need to follow the example given above, verbatim. It's just an example. 

While you should be able to complete this challenge in roughly 2-3 hours, do not feel compelled to timebox yourself. Feel free to add your own flair and make the code your own. If needed, make your best assumptions and explain how/why.

### Devlog

Please note some todo.

Well At this point I can probably map relations between tables for lazy loading. But I'll try repository first.

Hmmm. Maybe it make sense`session_name` or at least `session_key` unique constrain? I'm just thinking about user mistake creating the same session twice and have some misunderstanding.

#### q1

> sort the sessions alphabetically based on the speaker's last name

- single session may have multiple speakers. So does order of sessions matter? As sorting speakers
- At this point manual review needed in order to migrate data format with single `name` column to `first_name` and `last_name`

No pagination at this point!

Nice to have: Openapi

Frontend project: https://github.com/saatsazov/codechallenge-frontend

---

Just to note my process. 

![process](assets/process.png)

*I Use debugger*


for both frontend and backend

### Conclusion
 - Frontend project: https://github.com/saatsazov/codechallenge-frontend
 - Live: https://codechallenge-frontend.pages.dev 
 
 Fake api is used for production for easy deploy https://github.com/saatsazov/codechallenge-frontend/blob/ccd6191220661535a4c498d89bdbba64732e923c/src/api/Api.ts#L8

I left a lot of comment on the project as this is just a some draft of a bootstrapping a new project.

Please note I made some function in order to format date as required on client side. To show appointments in client timezone (I'm not sure it's now works correctly but I definitely put some ground work for that). 
https://github.com/saatsazov/codechallenge-frontend/blob/921297f00fdfdda298b5e431f69d6ae8df96958c/src/components/Session.vue#L20

I didn't do much code organization/architecture and mostly now it's in a wip state.

I can continue working on the project. But I'd like to have some feedback at this point.