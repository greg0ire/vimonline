<HTML>
<HEAD>
<!-- writer information at the end of the file -->
	<TITLE>Comment and document</TITLE>
<HEAD>
<BODY BGCOLOR="#FFFFFF">
<H1>Comment and document</H1>
<p>
Documentation is great, reading it is even better, writing it is difficult.
</p>
<p>
Developers should document any non-trivial things. A good documentation should
give the reader a good overview without the need of reading a line of code (HTML
or php).
</p>
<p>
Comment in code are a kind of embeded documentation. A comment should be
useful to explain some complex code or a comment could be a reminder like a
file header or a function header.
</p>
<p>
Efficient commenting are done before and while programming, rarely after. If
a developer must produce some documentation and is not able to do so, he
should ask for help.
</p>
<p>
Bad documentation is worse than no documentation at all.
</p>
<h2>Proposed headers</h2>
<h3>function header</h3>
<pre>
/*
 * function_name()
 * 
 * Short description of what the function does and what the function expects.
 * Don't forget to specify if the function alter some files or databases.
 *
 * TODO: if needed
 */
</pre>
<h3>file header</h3>
<pre>
/*
 * name_of_file
 *
 * On sentence of what can be found here.
 *
 * Author: FirstName LastName (e-mail)
 * Date: creation date
 * Modified: $Date: 2002/01/27 00:21:41 $
 * $Revision: 1.1 $
 *
 * Long description if required.
 * 
 * TODO: global todo about this file or module
 *
 * any other useful information
 */
<hr noshade size=1 width="50%">
<small><pre>
 Author: Sylvain Viart (viart@users.sf.net)
 Date: samedi 26 janvier 2002, 16:51:46 Est
 Modified:
<pre>
</small>
</BODY>
</HTML>
