# SullysBrain.com Design
Living document of my devops development process for my website, SullysBrain. 

### Progress
Installed Django base to begin transferring the static website into the django framework. 

- Step 1: Create cleaned template for index.html
- Step 2: Installed Django
- Step 3: Installed base apps
- Step 4: Installed dockerfile
	- Note: dockerfile must have 0.0.0.0:8000 for now, until I tighten security
- Step 5: Deploy on fly.io (for now, until I deploy to my own server)

- Tag: 5.0:  for Chapter 5 deployment
- Added second version for blog model of SQL
- Continue adding updated design into Django framework
- Setup for Forms

### New Branch: blog_app
- Created blog_app branch for blog app foundation creation
- Use current in development design from SB and build in django.
- Keep a 'portfolio' mindset

### Todo
- Django web backend, accessing SQL database. 
	- Django template installed
	- Base app installed: "pages"

- Added very bare bones WSGI server and collectstatic. Note: Do a deep dive
- Added bare bones Whitenoise. Note: do a deep dive.
- Begin work switching to PostgreSQL

- Cache to static build
- Have dynamic REST ability to show real time SQL queries. 
- Build site within Docker environments (one for database, one for main app)
- Setup Jenkins for git -> production pipeline

#### Requirements Troubleshoot

When running pipfreeze, I am getting a link to the github repo instead of a specific versionn number. If the requirements has the following:

gunicorn @ git+https://github.com/benoitc/gunicorn.git@430dcdd997b955fa1a8569a07d9cdcbac686fb35

then change it to "gunicorn==20.1.0" to rebuild properly.

- Also note: pipenv does not work with this config. Use .venv as your virtual environment instead.



#### Copyright Notice
Code is supplied for education, documentation, and genearal sharing. However, all content (ie. website copy, images, and blog posts, articles, and tutorials) are copyrighted by Scott Sullivan. All rights reserved. Basically, please don't copy the actual design, arcle ontent, or images without my written consent. 

However, please do use this public repository to learn and follow the code, use the code, modify the code, and follow my process of designing and building the website and backend as part of my devops development process. Thank you for honering this ask!
