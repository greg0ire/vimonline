<?php
// Maillists about Vim
require_once("include/init.inc");
$page_title = "mailing lists";

include("header.php");
?>
<h1>vim.org maillists</h1>
<p>
	A few notes about using the maillists:
</p>
<ul>
  <li>Before sending a message check the archive (see below),
      <a href="search.php">search</a> the Vim pages and the
      <a href='http://vimdoc.sourceforge.net/cgi-bin/vimfaq2html3.pl'>FAQ</a>,
       your question may have been answered already.</li>
  <li>Do not send messages in HTML.  You will be flamed!  Every decent mail
      program has an option to switch of HTML.</li>
  <li>Attachments are allowed, but keep the total message size below 50
      Kbytes.  Otherwise upload your file somewhere and send the URL to the
      maillist</li>
  <li>You can get an automated help message from the mailing list manager, see
      <a href="#help">here</a> for an example.</li>
</ul>

<A NAME="vim-announce"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-announce@vim.org</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
      Announcements only. New releases, important patches and bug
      reports. Change of important mail and web addresses. 
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-announce-subscribe@vim.org'>vim-announce-subscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim-announce@vim.org'>vim-announce@vim.org</a>;  you
      require special permission to send mail to the vim-announce list
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-announce-unsubscribe@vim.org'>vim-announce-unsubscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-announce-info@vim.org'>vim-announce-info@vim.org</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      Mail sent to this list is also sent to subscribers of vim@vim.org,
      vim-dev@vim.org and vim-multibyte@vim.org.
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://groups.yahoo.com/group/vimannounce'>http://groups.yahoo.com/group/vimannounce</a>
      &nbsp;&nbsp;&nbsp;
      <a href='http://marc.theaimsgroup.com/?l=vim-announce&r=1&w=2'>alternate</a>
    </td>
  </tr>
</table>
<p>

<A NAME="vim"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim@vim.org</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
      This list is for Vim user support.  You can send general questions
      to this list to be answered by other Vim users.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-subscribe@vim.org'>vim-subscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim@vim.org'>vim@vim.org</a>; you must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-unsubscribe@vim.org'>vim-unsubscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-info@vim.org'>vim-info@vim.org</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
	You should consult the
	<a href='http://vimdoc.sourceforge.net/cgi-bin/vimfaq2html3.pl'>FAQ</a>,
	<a href='tip_index.php'>tips archive</a> and the
	<a href='http://groups.yahoo.com/group/vim'>mailing list archive</a>
	before posting to avoid duplicating often-answered questions.
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://groups.yahoo.com/group/vim'>http://groups.yahoo.com/group/vim</a>
      &nbsp;&nbsp;&nbsp;
      <a href='http://marc.theaimsgroup.com/?l=vim&r=1&w=2'>alternate</a>
    </td>
  </tr>
</table>
<p>

<A NAME="vim-dev"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-dev@vim.org</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
      Bugs, new features, and other development issues are discussed on this list.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-dev-subscribe@vim.org'>vim-dev-subscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim-dev@vim.org'>vim-dev@vim.org</a>; you
      must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-dev-unsubscribe@vim.org'>vim-dev-unsubscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-dev-info@vim.org'>vim-dev-info@vim.org</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      If you aren't writing bugfixes or extensions to vim, or at least
      reporting an apparent bug, this probably isn't the right list for
      you.  Use questions should stick to vim@vim.org, above.
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://groups.yahoo.com/group/vimdev'>http://groups.yahoo.com/group/vimdev</a>
      &nbsp;&nbsp;&nbsp;
      <a href='http://marc.theaimsgroup.com/?l=vim-dev&r=1&w=2'>alternate</a>
    </td>
  </tr>
</table>
<P>

<A NAME="vim-mac"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-mac@vim.org</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
      This list is for discussing the development of Vim on the Mac OS.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-mac-subscribe@vim.org'>vim-mac-subscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim-mac@vim.org'>vim-mac@vim.org</a>; you
      must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-mac-unsubscribe@vim.org'>vim-mac-unsubscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-mac-info@vim.org'>vim-mac-info@vim.org</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      This is for questions about compiling and coding for Vim on the
      Mac.  Use questions should stick to vim@vim.org, above.
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://groups.yahoo.com/group/vim-mac'>http://groups.yahoo.com/group/vim-mac</a>
      &nbsp;&nbsp;&nbsp;
      <a href='http://marc.theaimsgroup.com/?l=vim-mac&r=1&w=2'>alternate</a>
    </td>
  </tr>
</table>
<p>

<A NAME="vim-multibyte"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-multibyte@vim.org</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
      This list is for discussing Vim support and development for
      multibyte encodings like Big5 and Unicode.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-multibyte-subscribe@vim.org'>vim-multibyte-subscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim-multibyte@vim.org'>vim-multibyte@vim.org</a>; you
      must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-multibyte-unsubscribe@vim.org'>vim-multibyte-unsubscribe@vim.org</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-multibyte-info@vim.org'>vim-multibyte-info@vim.org</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      &nbsp;
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://groups.yahoo.com/group/vim-multibyte'>http://groups.yahoo.com/group/vim-multibyte</a>
      &nbsp;&nbsp;&nbsp;
      <a href='http://marc.theaimsgroup.com/?l=vim-multibyte&r=1&w=2'>alternate</a>
    </td>
  </tr>
</table>
<p>


<h1>third-party lists</h1>
<p>
	Please let us know of any Vim-related mailing lists that we've missed!
</p>

<p>
<A NAME="vim-vms"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-vms@polarhome.com</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
	  This list is for discussing the development of Vim on OpenVMS.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href="mailto:vim-vms-subscribe@polarhome.com">vim-vms-subscribe@polarhome.com</A>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href="mailto:vim-vms@polarhome.com">vim-vms@polarhome.com</a>;
      you must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-vms-unsubscribe@polarhome.com'>vim-vms-unsubscribe@polarhome.com</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-vms-info@polarhome.com'>vim-vms-info@polarhome.com</a>
      to obtain information, or use the web interface at:
      <a href="http://www.polarhome.com/mailman/listinfo/vim-vms">http://www.polarhome.com/mailman/listinfo/vim-vms</a>
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      This is for questions about compiling and coding for Vim on OpenVMS. Non
      VMS related use questions should stick to vim@vim.org, above.
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://www.polarhome.com/pipermail/vim-vms/'>http://www.polarhome.com/pipermail/vim-vms/</a>
    </td>
  </tr>
</table>
<p>
<A NAME="vim-fr"></A>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th colspan='2'>vim-fr@yahoogroupes.fr</th>
  </tr>
  <tr class='rowodd'>
    <th>Purpose</th>
    <td>
	  This list is for Vim user support, in French. You can send general
	  questions to this list to be answered by other Vim users.  In other
	  words, it's just like <a href='#vim'>vim@vim.org</a>, but in French.
    </td>
  </tr>
  <tr class='roweven'>
    <th>To Subscribe</th>
    <td>
      email <a href='mailto:vim-fr-subscribe@yahoogroupes.fr'>vim-fr-subscribe@yahoogroupes.fr</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>To Post</th>
    <td>
      email <a href='mailto:vim-fr@yahoogroupes.fr'>vim-fr@yahoogroupes.fr</a>; you
      must be subscribed to post!
    </td>
  </tr>
  <tr class='roweven'>
    <th nowrap>To Unsubscribe</th>
    <td>
      email <a href='mailto:vim-fr-unsubscribe@yahoogroupes.fr'>vim-fr-unsubscribe@yahoogroupes.fr</a>
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Help</th>
    <td>
      email <a href='mailto:vim-fr-owner@vimyahoogroupes.fr'>vim-fr-owner@yahoogroupes.fr</a>
      to obtain information.
    </td>
  </tr>
  <tr class='roweven'>
    <th>Comments</th>
    <td>
      &nbsp;
    </td>
  </tr>
  <tr class='rowodd'>
    <th>Archive</th>
    <td>
      <a href='http://fr.groups.yahoo.com/group/vim-fr'>http://fr.groups.yahoo.com/group/vim-fr</a>
    </td>
  </tr>
</table>

<A NAME="help"></A>
<h1>maillist help</h1>
<p>
This is info you get from vim-help@vim.org.
For other lists replace "vim" with the name of the maillist.
<PRE>
--- Administrative commands for the vim list ---

I can handle administrative requests automatically. Please
do not send them to the list address! Instead, send
your message to the correct command address:

To subscribe to the list, send a message to:
   &lt;vim-subscribe@vim.org&gt;

To remove your address from the list, send a message to:
   &lt;vim-unsubscribe@vim.org&gt;

Send mail to the following for info and FAQ for this list:
   &lt;vim-info@vim.org&gt;
   &lt;vim-faq@vim.org&gt;

Similar addresses exist for the digest list:
   &lt;vim-digest-subscribe@vim.org&gt;
   &lt;vim-digest-unsubscribe@vim.org&gt;

To get messages 123 through 145 (a maximum of 100 per request), mail:
   &lt;vim-get.123_145@vim.org&gt;

To get an index with subject and author for messages 123-456 , mail:
   &lt;vim-index.123_456@vim.org&gt;

They are always returned as sets of 100, max 2000 per request,
so you'll actually get 100-499.

To receive all messages with the same subject as message 12345,
send an empty message to:
   &lt;vim-thread.12345@vim.org&gt;

The messages do not really need to be empty, but I will ignore
their content. Only the ADDRESS you send to is important.

You can start a subscription for an alternate address,
for example "john@host.domain", just add a hyphen and your
address (with '=' instead of '@') after the command word:
&lt;vim-subscribe-john=host.domain@vim.org&gt;

To stop subscription for this address, mail:
&lt;vim-unsubscribe-john=host.domain@vim.org&gt;

In both cases, I'll send a confirmation message to that address. When
you receive it, simply reply to it to complete your subscription.

If despite following these instructions, you do not get the
desired results, please contact my owner at
vim-owner@vim.org. Please be patient, my owner is a
lot slower than I am ;-)
</PRE>
<?php
include("footer.php");
?>
