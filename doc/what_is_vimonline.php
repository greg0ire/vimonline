<HTML>
<HEAD>
<!--
 what_is_vimonline.php

 Author: Sylvain Viart (viart@users.sf.net)
 Date: samedi 26 janvier 2002, 16:51:46 Est
 Modified: $Date: 2002/01/27 01:01:29 $
 $Revision: 1.2 $
-->
	<TITLE>What is vimonline ?</TITLE>
<HEAD>
<BODY BGCOLOR="#FFFFFF">
<H1>What is vimonline ?</H1>
<p>
This document and every documentation here is for vimonline developer. For
user documentation see 
<a href="http://vim.sourceforge.net/">vim.sourceforge.net</a> directly.
</p>
<p>
vimonline is a dynamic content web site. It's a portal fo vim's users who want
to share their work and idea.
</P>
<h2>Our goals</h2>
<p>
<font color=red><B>TODO:</B></font>format and document<br>
<pre>
[included text from CVS : vimonline/design/notes.txt ]

goal

- centralized place for storing vim scripts
- allow vim users to quickly find scripts
- allow maintainers to upload new versions of scripts

feature brainstorm

- search for scripts
- view scripts by category
- download tar of all syntax files
- rank scripts
- view highest ranked and most downloaded scripts
- allow users to upload new scripts and updated versions of scripts
- allow users to register to receive updates when new scripts are uploaded
- show recent script updates
- combine vim-tips and vim scripts into the vim user repository so everything is under one roof

open questions

- how do I deal with ^M?
- should only the user who uploaded the script be able to submit new versions?
- how should we do authentication?

design notes

script fields
  - type - script type (indent,syntax,utility,colorscheme)
  - summary
  - description 
  - install_details -  install instructions and requirements
  - vim_version - vim version required
  - script_version
  - stats
    - ratings
    - ratings_score
    - downloads
  - functional category

open questions

q: how to link maintainers to scripts?

closed questions

q: where to store script name? allow them to specify and ignore the upload
  filename? 
a: allow the user to enter it for right now

color combo:

blue #000066
dark gray #6A6A5A
light gray #CCCC99
yellow #FFCC00
possible green: #cccc66
 
upgrade : tar cvf ug.tar --exclude=CVS --exclude=*.swo --exclude=*.swp --exclude=site-config.inc *

</pre>
</p>
<h2>how does it work ?</h2>
<p>
<font color=red><B>TODO:</B></font>import some text here<br>
<a href="http://vimonline.sourceforge.net/">available here</a>
</p>
</BODY>
</HTML>
