<?php
// Vim script links
require_once("include/init.inc");
$page_title = "Vim script links";

include("header.php");
?>
<h1>Vim script links</h1>
This table lists the URLs found in the current scripts of
the runtime files.
<br>
Usually you can find the latest version with this link.
<p>
To use a file put it in the subdirectory of $VIMRUNTIME where it
belongs.  E.g., the vim.vim syntax file goes into $VIMRUNTIME/syntax
and the vim.vim indent script goes into $VIMRUNTIME/indent.
<br>
To find out the value of $VIMRUNTIME use this Vim command:
<pre>
:echo $VIMRUNTIME</pre>
You can put a file in your own Vim runtime directory (~/.vim), but
don't forget to delete it when upgrading Vim!
<p>
<table cellspacing="2" cellpadding="2" border="0" width="100%">
<tr class="tableheader"><th>color scheme</td><th>$VIMRUNTIME/colors/</td></tr><tr class="rowodd"><td>desert</td><td><a href="http://fugal.net/vim/colors/desert.vim">http://fugal.net/vim/colors/desert.vim</a></td></tr>
<tr class="roweven"><td>peachpuff</td><td><a href="http://physics.muni.cz/~yeti/download/color/peachpuff.vim">http://physics.muni.cz/~yeti/download/color/peachpuff.vim</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>compiler plugin</td><th>$VIMRUNTIME/compiler/</td></tr><tr class="rowodd"><td>checkstyle</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/compiler/checkstyle.vim">http://mugca.its.monash.edu.au/~djkea2/vim/compiler/checkstyle.vim</a></td></tr>
<tr class="roweven"><td>fortran_elf90</td><td><a href="http://www.unb.ca/chem/ajit/compiler/fortran_elf90.vim">http://www.unb.ca/chem/ajit/compiler/fortran_elf90.vim</a></td></tr>
<tr class="rowodd"><td>fortran_lf95</td><td><a href="http://www.unb.ca/chem/ajit/compiler/fortran_lf95.vim">http://www.unb.ca/chem/ajit/compiler/fortran_lf95.vim</a></td></tr>
<tr class="roweven"><td>jikes</td><td><a href="http://mywebpage.netscape.com/sharppeople/vim/compiler">http://mywebpage.netscape.com/sharppeople/vim/compiler</a></td></tr>
<tr class="rowodd"><td>tidy</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/compiler/tidy.vim">http://mugca.its.monash.edu.au/~djkea2/vim/compiler/tidy.vim</a></td></tr>
<tr class="roweven"><td>xmllint</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/compiler/xmllint.vim">http://mugca.its.monash.edu.au/~djkea2/vim/compiler/xmllint.vim</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>filetype plugin</td><th>$VIMRUNTIME/ftplugin/</td></tr><tr class="rowodd"><td>art</td><td><a href="http://www.ccs.neu.edu/~dorai/artvim/artvim.html">http://www.ccs.neu.edu/~dorai/artvim/artvim.html</a></td></tr>
<tr class="roweven"><td>automake</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>changelog</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>fortran</td><td><a href="http://www.unb.ca/chem/ajit/ftplugin/fortran.vim">http://www.unb.ca/chem/ajit/ftplugin/fortran.vim</a></td></tr>
<tr class="rowodd"><td>java</td><td><a href="http://mywebpage.netscape.com/sharppeople/vim/ftplugin">http://mywebpage.netscape.com/sharppeople/vim/ftplugin</a></td></tr>
<tr class="roweven"><td>lprolog</td><td><a href="http://www.ai.univie.ac.at/~markus/vim/ftplugin/lprolog.vim">http://www.ai.univie.ac.at/~markus/vim/ftplugin/lprolog.vim</a></td></tr>
<tr class="rowodd"><td>ocaml</td><td><a href="http://www.ai.univie.ac.at/~markus/vim/ftplugin/ocaml.vim">http://www.ai.univie.ac.at/~markus/vim/ftplugin/ocaml.vim</a></td></tr>
<tr class="roweven"><td>perl</td><td><a href="http://mywebpage.netscape.com/sharppeople/vim/ftplugin">http://mywebpage.netscape.com/sharppeople/vim/ftplugin</a></td></tr>
<tr class="rowodd"><td>tex</td><td><a href="http://www.vim.org/script.php?script_id=411">http://www.vim.org/script.php?script_id=411</a></td></tr>
<tr class="roweven"><td>verilog</td><td><a href="http://larc.ee.nthu.edu.tw/~cthuang/vim/ftplugin/verilog.vim">http://larc.ee.nthu.edu.tw/~cthuang/vim/ftplugin/verilog.vim</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>indent plugin</td><th>$VIMRUNTIME/indent/</td></tr><tr class="rowodd"><td>art</td><td><a href="http://www.ccs.neu.edu/~dorai/artvim/artvim.html">http://www.ccs.neu.edu/~dorai/artvim/artvim.html</a></td></tr>
<tr class="roweven"><td>eiffel</td><td><a href="http://gadicath.webhop.net/other/eiffel.vim">http://gadicath.webhop.net/other/eiffel.vim</a></td></tr>
<tr class="rowodd"><td>fortran</td><td><a href="http://www.unb.ca/chem/ajit/indent/fortran.vim">http://www.unb.ca/chem/ajit/indent/fortran.vim</a></td></tr>
<tr class="roweven"><td>html</td><td><a href="http://www.zellner.org/vim/indent/html.vim">http://www.zellner.org/vim/indent/html.vim</a></td></tr>
<tr class="rowodd"><td>ishd</td><td><a href="http://www.zellner.org/vim/indent/ishd.vim">http://www.zellner.org/vim/indent/ishd.vim</a></td></tr>
<tr class="roweven"><td>ocaml</td><td><a href="http://www.oefai.at/~markus/vim/indent/ocaml.vim">http://www.oefai.at/~markus/vim/indent/ocaml.vim</a></td></tr>
<tr class="rowodd"><td>perl</td><td><a href="http://rgarciasuarez.free.fr/vim/indent/perl.vim">http://rgarciasuarez.free.fr/vim/indent/perl.vim</a></td></tr>
<tr class="roweven"><td>php</td><td><a href="http://groupwhere.org/php.vim">http://groupwhere.org/php.vim</a></td></tr>
<tr class="rowodd"><td>scheme</td><td><a href="http://www.ccs.neu.edu/~dorai/scmindent/scmindent.html">http://www.ccs.neu.edu/~dorai/scmindent/scmindent.html</a></td></tr>
<tr class="roweven"><td>tilde</td><td><a href="http://tilde.tildesoftware.net">http://tilde.tildesoftware.net</a></td></tr>
<tr class="rowodd"><td>vb</td><td><a href="http://www.zellner.org/vim/indent/vb.vim">http://www.zellner.org/vim/indent/vb.vim</a></td></tr>
<tr class="roweven"><td>verilog</td><td><a href="http://larc.ee.nthu.edu.tw/~cthuang/vim/indent/verilog.vim">http://larc.ee.nthu.edu.tw/~cthuang/vim/indent/verilog.vim</a></td></tr>
<tr class="rowodd"><td>xml</td><td><a href="http://www.zellner.org/vim/indent/xml.vim">http://www.zellner.org/vim/indent/xml.vim</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>keymap</td><th>$VIMRUNTIME/keymap/</td></tr><tr class="rowodd"><td>serbian-latin_utf-8</td><td><a href="http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-latin-UTF-8.vim">http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-latin-UTF-8.vim</a></td></tr>
<tr class="roweven"><td>serbian_cp1250</td><td><a href="http://galeb.etf.bg.ac.yu/~alexa/vim/keymap/serbian-cp1250.vim">http://galeb.etf.bg.ac.yu/~alexa/vim/keymap/serbian-cp1250.vim</a></td></tr>
<tr class="rowodd"><td>serbian_cp1251</td><td><a href="http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-cp1251.vim">http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-cp1251.vim</a></td></tr>
<tr class="roweven"><td>serbian_iso-8859-2</td><td><a href="http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-iso-8859-2.vim">http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-iso-8859-2.vim</a></td></tr>
<tr class="rowodd"><td>serbian_iso-8859-5</td><td><a href="http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-iso-8859-5.vim">http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-iso-8859-5.vim</a></td></tr>
<tr class="roweven"><td>serbian_utf-8</td><td><a href="http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-UTF-8.vim">http://www.cs.cmu.edu/~aleksa/personal/vim/keymap/serbian-UTF-8.vim</a></td></tr>
<tr class="rowodd"><td>slovak_cp1250</td><td><a href="http://www.pv2c.sk/free/sk_vimkeymap/">http://www.pv2c.sk/free/sk_vimkeymap/</a></td></tr>
<tr class="roweven"><td>slovak_iso-8859-2</td><td><a href="http://www.pv2c.sk/free/sk_vimkeymap/">http://www.pv2c.sk/free/sk_vimkeymap/</a></td></tr>
<tr class="rowodd"><td>slovak_utf-8</td><td><a href="http://www.pv2c.sk/free/sk_vimkeymap/">http://www.pv2c.sk/free/sk_vimkeymap/</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>menu translation</td><th>$VIMRUNTIME/lang/</td></tr><tr class="rowodd"><td>menu_cs_cz.iso_8859-2</td><td><a href="http://brz.d2.cz/vim">http://brz.d2.cz/vim</a></td></tr>
<tr class="roweven"><td>menu_czech_czech_republic.1250</td><td><a href="http://brz.d2.cz/vim">http://brz.d2.cz/vim</a></td></tr>
<tr class="rowodd"><td>menu_czech_czech_republic.ascii</td><td><a href="http://brz.d2.cz/vim">http://brz.d2.cz/vim</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>plugin</td><th>$VIMRUNTIME/macros/</td></tr><tr class="rowodd"><td>matchit</td><td><a href="http://www.vim.org/script.php?script_id=39">http://www.vim.org/script.php?script_id=39</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr><tr class="tableheader"><th>syntax file</td><th>$VIMRUNTIME/syntax/</td></tr><tr class="rowodd"><td>abc</td><td><a href="http://perun.hscs.wmin.ac.uk/~jra/vim/syntax/abc.vim">http://perun.hscs.wmin.ac.uk/~jra/vim/syntax/abc.vim</a></td></tr>
<tr class="roweven"><td>acedb</td><td><a href="http://www.ed.ac.uk/~swmorris/vim/acedb.vim">http://www.ed.ac.uk/~swmorris/vim/acedb.vim</a></td></tr>
<tr class="rowodd"><td>ada</td><td><a href="http://www.dwheeler.com/vim">http://www.dwheeler.com/vim</a></td></tr>
<tr class="roweven"><td>amiga</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>apache</td><td><a href="http://trific.ath.cx/Ftp/vim/syntax/apache.vim">http://trific.ath.cx/Ftp/vim/syntax/apache.vim</a></td></tr>
<tr class="roweven"><td>art</td><td><a href="http://www.ccs.neu.edu/~dorai/artvim/artvim.html">http://www.ccs.neu.edu/~dorai/artvim/artvim.html</a></td></tr>
<tr class="rowodd"><td>asn</td><td><a href="http://www.fleiner.com/vim/syntax/asn.vim">http://www.fleiner.com/vim/syntax/asn.vim</a></td></tr>
<tr class="roweven"><td>aspperl</td><td><a href="http://nim.dhs.org/~edh/aspperl.vim">http://nim.dhs.org/~edh/aspperl.vim</a></td></tr>
<tr class="rowodd"><td>aspvbs</td><td><a href="http://tritarget.com/pub/vim/syntax/aspvbs.vim">http://tritarget.com/pub/vim/syntax/aspvbs.vim</a></td></tr>
<tr class="roweven"><td>bdf</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>bib</td><td><a href="http://home.t-online.de/home/Bernd.Feige/bib.vim">http://home.t-online.de/home/Bernd.Feige/bib.vim</a></td></tr>
<tr class="roweven"><td>bindzone</td><td><a href="http://rnd.web-drive.ru/vim/syntax/bindzone.vim">http://rnd.web-drive.ru/vim/syntax/bindzone.vim</a></td></tr>
<tr class="rowodd"><td>catalog</td><td><a href="http://www.zellner.org/vim/syntax/catalog.vim">http://www.zellner.org/vim/syntax/catalog.vim</a></td></tr>
<tr class="roweven"><td>crontab</td><td><a href="http://bigfoot.com/~johnh51/vim/syntax/crontab.vim">http://bigfoot.com/~johnh51/vim/syntax/crontab.vim</a></td></tr>
<tr class="rowodd"><td>csh</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>csp</td><td><a href="http://www.tzi.de/~brederek/vim/">http://www.tzi.de/~brederek/vim/</a></td></tr>
<tr class="rowodd"><td>css</td><td><a href="http://www.fleiner.com/vim/syntax/css.vim">http://www.fleiner.com/vim/syntax/css.vim</a></td></tr>
<tr class="roweven"><td>cvs</td><td><a href="http://www.zotikos.com/downloads/cvs.vim">http://www.zotikos.com/downloads/cvs.vim</a></td></tr>
<tr class="rowodd"><td>cvsrc</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>dcl</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>def</td><td><a href="http://www.datatone.com/~robb/vim/syntax/def.vim">http://www.datatone.com/~robb/vim/syntax/def.vim</a></td></tr>
<tr class="roweven"><td>dns</td><td><a href="http://scripts.jehsom.com">http://scripts.jehsom.com</a></td></tr>
<tr class="rowodd"><td>docbk</td><td><a href="http://tritarget.com/pub/vim/syntax/docbk.vim">http://tritarget.com/pub/vim/syntax/docbk.vim</a></td></tr>
<tr class="roweven"><td>dosbatch</td><td><a href="http://www.eandem.co.uk/mrw/vim">http://www.eandem.co.uk/mrw/vim</a></td></tr>
<tr class="rowodd"><td>dot</td><td><a href="http://www.ai.univie.ac.at/~markus/vim/syntax/dot.vim">http://www.ai.univie.ac.at/~markus/vim/syntax/dot.vim</a></td></tr>
<tr class="roweven"><td>dsl</td><td><a href="http://www.zellner.org/vim/syntax/dsl.vim">http://www.zellner.org/vim/syntax/dsl.vim</a></td></tr>
<tr class="rowodd"><td>dtd</td><td><a href="http://www.zellner.org/vim/syntax/dtd.vim">http://www.zellner.org/vim/syntax/dtd.vim</a></td></tr>
<tr class="roweven"><td>ecd</td><td><a href="http://opensource.lineo.com/~beppu/prose/ecd_vim.html">http://opensource.lineo.com/~beppu/prose/ecd_vim.html</a></td></tr>
<tr class="rowodd"><td>elf</td><td><a href="http://www.cvjb.de/comp/vim/elf.vim">http://www.cvjb.de/comp/vim/elf.vim</a></td></tr>
<tr class="roweven"><td>elmfilt</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>erlang</td><td><a href="http://www.srk.fer.hr/~kmarzic/vim/syntax/erlang.vim">http://www.srk.fer.hr/~kmarzic/vim/syntax/erlang.vim</a></td></tr>
<tr class="roweven"><td>eterm</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>exim</td><td><a href="http://trific.ath.cx/Ftp/vim/syntax/exim.vim">http://trific.ath.cx/Ftp/vim/syntax/exim.vim</a></td></tr>
<tr class="roweven"><td>exports</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>fetchmail</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>focexec</td><td><a href="http://www.datatone.com/~robb/vim/syntax/focexec.vim">http://www.datatone.com/~robb/vim/syntax/focexec.vim</a></td></tr>
<tr class="rowodd"><td>forth</td><td><a href="http://www.cvjb.de/comp/vim/forth.vim">http://www.cvjb.de/comp/vim/forth.vim</a></td></tr>
<tr class="roweven"><td>fortran</td><td><a href="http://www.unb.ca/chem/ajit/syntax/fortran.vim">http://www.unb.ca/chem/ajit/syntax/fortran.vim</a></td></tr>
<tr class="rowodd"><td>gdb</td><td><a href="http://www.fleiner.com/vim/syntax/gdb.vim">http://www.fleiner.com/vim/syntax/gdb.vim</a></td></tr>
<tr class="roweven"><td>gdmo</td><td><a href="http://dooly.modacom.co.kr/gdmo.vim">http://dooly.modacom.co.kr/gdmo.vim</a></td></tr>
<tr class="rowodd"><td>gkrellmrc</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/gkrellmrc.vim">http://physics.muni.cz/~yeti/download/syntax/gkrellmrc.vim</a></td></tr>
<tr class="roweven"><td>gnuplot</td><td><a href="http://bigfoot.com/~johnh51/vim/syntax/gnuplot.vim">http://bigfoot.com/~johnh51/vim/syntax/gnuplot.vim</a></td></tr>
<tr class="rowodd"><td>gpg</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>groff</td><td><a href="http://www.eleves.ens.fr:8080/home/plut/nroff.vim">http://www.eleves.ens.fr:8080/home/plut/nroff.vim</a></td></tr>
<tr class="rowodd"><td>grub</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>gsp</td><td><a href="http://www.constructicon.com/~nharward/vim/syntax/gsp.vim">http://www.constructicon.com/~nharward/vim/syntax/gsp.vim</a></td></tr>
<tr class="rowodd"><td>gtkrc</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/gtkrc.vim">http://physics.muni.cz/~yeti/download/syntax/gtkrc.vim</a></td></tr>
<tr class="roweven"><td>hb</td><td><a href="http://bachue.com/hb/vim/syntax/hb.vim">http://bachue.com/hb/vim/syntax/hb.vim</a></td></tr>
<tr class="rowodd"><td>hog</td><td><a href="http://home.lanl.gov/cpw/vim/syntax/hog.vim">http://home.lanl.gov/cpw/vim/syntax/hog.vim</a></td></tr>
<tr class="roweven"><td>html</td><td><a href="http://www.fleiner.com/vim/syntax/html.vim">http://www.fleiner.com/vim/syntax/html.vim</a></td></tr>
<tr class="rowodd"><td>htmlm4</td><td><a href="http://www.fleiner.com/vim/syntax/htmlm4.vim">http://www.fleiner.com/vim/syntax/htmlm4.vim</a></td></tr>
<tr class="roweven"><td>htmlos</td><td><a href="http://www.rustyparts.com/vim/syntax/htmlos.vim">http://www.rustyparts.com/vim/syntax/htmlos.vim</a></td></tr>
<tr class="rowodd"><td>ia64</td><td><a href="http://www.geocities.com/pmalwankar">http://www.geocities.com/pmalwankar</a></td></tr>
<tr class="roweven"><td>icon</td><td><a href="ftp://ftp.halcyon.com/pub/users/wturner/icon.vim">ftp://ftp.halcyon.com/pub/users/wturner/icon.vim</a></td></tr>
<tr class="rowodd"><td>indent</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>inittab</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/inittab.vim">http://physics.muni.cz/~yeti/download/syntax/inittab.vim</a></td></tr>
<tr class="rowodd"><td>java</td><td><a href="http://www.fleiner.com/vim/syntax/java.vim">http://www.fleiner.com/vim/syntax/java.vim</a></td></tr>
<tr class="roweven"><td>javacc</td><td><a href="http://www.fleiner.com/vim/syntax/javacc.vim">http://www.fleiner.com/vim/syntax/javacc.vim</a></td></tr>
<tr class="rowodd"><td>javascript</td><td><a href="http://www.fleiner.com/vim/syntax/javascript.vim">http://www.fleiner.com/vim/syntax/javascript.vim</a></td></tr>
<tr class="roweven"><td>jsp</td><td><a href="http://rgarciasuarez.free.fr/vim/syntax/jsp.vim">http://rgarciasuarez.free.fr/vim/syntax/jsp.vim</a></td></tr>
<tr class="rowodd"><td>kix</td><td><a href="http://www.howsoft.demon.co.uk/">http://www.howsoft.demon.co.uk/</a></td></tr>
<tr class="roweven"><td>kscript</td><td><a href="http://aquila.rezel.enst.fr/thomas/vim/kscript.vim">http://aquila.rezel.enst.fr/thomas/vim/kscript.vim</a></td></tr>
<tr class="rowodd"><td>lex</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>lftp</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>lilo</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/lilo.vim">http://physics.muni.cz/~yeti/download/syntax/lilo.vim</a></td></tr>
<tr class="roweven"><td>lisp</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>lite</td><td><a href="http://www.isp.de/data/lite.vim">http://www.isp.de/data/lite.vim</a></td></tr>
<tr class="roweven"><td>lotos</td><td><a href="http://lotos.csi.uottawa.ca/~damyot/vim/lotos.vim">http://lotos.csi.uottawa.ca/~damyot/vim/lotos.vim</a></td></tr>
<tr class="rowodd"><td>lout</td><td><a href="http://www.cvjb.de/comp/vim/lout.vim">http://www.cvjb.de/comp/vim/lout.vim</a></td></tr>
<tr class="roweven"><td>lpc</td><td><a href="http://poet.tomud.com/pub/lpc.vim.bz2">http://poet.tomud.com/pub/lpc.vim.bz2</a></td></tr>
<tr class="rowodd"><td>lprolog</td><td><a href="http://www.ai.univie.ac.at/~markus/vim/syntax/lprolog.vim">http://www.ai.univie.ac.at/~markus/vim/syntax/lprolog.vim</a></td></tr>
<tr class="roweven"><td>lynx</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/syntax/lynx.vim">http://mugca.its.monash.edu.au/~djkea2/vim/syntax/lynx.vim</a></td></tr>
<tr class="rowodd"><td>m4</td><td><a href="http://www.fleiner.com/vim/syntax/m4.vim">http://www.fleiner.com/vim/syntax/m4.vim</a></td></tr>
<tr class="roweven"><td>mailcap</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/syntax/mailcap.vim">http://mugca.its.monash.edu.au/~djkea2/vim/syntax/mailcap.vim</a></td></tr>
<tr class="rowodd"><td>make</td><td><a href="http://www.fleiner.com/vim/syntax/make.vim">http://www.fleiner.com/vim/syntax/make.vim</a></td></tr>
<tr class="roweven"><td>maple</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>masm</td><td><a href="http://www.datatone.com/~robb/vim/syntax/masm.vim">http://www.datatone.com/~robb/vim/syntax/masm.vim</a></td></tr>
<tr class="roweven"><td>mason</td><td><a href="http://www.masonhq.com/editors/mason.vim">http://www.masonhq.com/editors/mason.vim</a></td></tr>
<tr class="rowodd"><td>master</td><td><a href="http://www.datatone.com/~robb/vim/syntax/master.vim">http://www.datatone.com/~robb/vim/syntax/master.vim</a></td></tr>
<tr class="roweven"><td>mgp</td><td><a href="http://alfie.ist.org/vim/syntax/mgp.vim">http://alfie.ist.org/vim/syntax/mgp.vim</a></td></tr>
<tr class="rowodd"><td>mmix</td><td><a href="http://homepages.uni-tuebingen.de/student/dirk.huesken/vim/syntax/mmix.vim">http://homepages.uni-tuebingen.de/student/dirk.huesken/vim/syntax/mmix.vim</a></td></tr>
<tr class="roweven"><td>modconf</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>msql</td><td><a href="http://www.isp.de/data/msql.vim">http://www.isp.de/data/msql.vim</a></td></tr>
<tr class="roweven"><td>mysql</td><td><a href="ftp://cedar-solutions.com/software/mysql.vim">ftp://cedar-solutions.com/software/mysql.vim</a></td></tr>
<tr class="rowodd"><td>named</td><td><a href="http://rnd.web-drive.ru/vim/syntax/named.vim">http://rnd.web-drive.ru/vim/syntax/named.vim</a></td></tr>
<tr class="roweven"><td>nqc</td><td><a href="http://www.enotes.de/twiki/pub/Home/LegoMindstorms/nqc.vim">http://www.enotes.de/twiki/pub/Home/LegoMindstorms/nqc.vim</a></td></tr>
<tr class="rowodd"><td>nroff</td><td><a href="http://www.eleves.ens.fr:8080/home/plut/nroff.vim">http://www.eleves.ens.fr:8080/home/plut/nroff.vim</a></td></tr>
<tr class="roweven"><td>ocaml</td><td><a href="http://www.oefai.at/~markus/vim/syntax/ocaml.vim">http://www.oefai.at/~markus/vim/syntax/ocaml.vim</a></td></tr>
<tr class="rowodd"><td>papp</td><td><a href="http://papp.plan9.de/">http://papp.plan9.de/</a></td></tr>
<tr class="roweven"><td>pfmain</td><td><a href="http://people.inf.elte.hu/~fuji/vim/syntax/pfmain.vim">http://people.inf.elte.hu/~fuji/vim/syntax/pfmain.vim</a></td></tr>
<tr class="rowodd"><td>php</td><td><a href="http://www.isp.de/data/php.vim">http://www.isp.de/data/php.vim</a></td></tr>
<tr class="roweven"><td>phtml</td><td><a href="http://www.isp.de/data/phtml.vim">http://www.isp.de/data/phtml.vim</a></td></tr>
<tr class="rowodd"><td>pic</td><td><a href="http://galeb.etf.bg.ac.yu/~alexa/vim/syntax/pic.vim">http://galeb.etf.bg.ac.yu/~alexa/vim/syntax/pic.vim</a></td></tr>
<tr class="roweven"><td>plsql</td><td><a href="http://lanzarotta.tripod.com/vim/syntax/plsql.vim.zip">http://lanzarotta.tripod.com/vim/syntax/plsql.vim.zip</a></td></tr>
<tr class="rowodd"><td>postscr</td><td><a href="http://www.eandem.co.uk/mrw/vim">http://www.eandem.co.uk/mrw/vim</a></td></tr>
<tr class="roweven"><td>pov</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/pov.vim">http://physics.muni.cz/~yeti/download/syntax/pov.vim</a></td></tr>
<tr class="rowodd"><td>povini</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/povini.vim">http://physics.muni.cz/~yeti/download/syntax/povini.vim</a></td></tr>
<tr class="roweven"><td>ppwiz</td><td><a href="http://www.ndh.net/home/sschwarzer/download/ppwiz.vim">http://www.ndh.net/home/sschwarzer/download/ppwiz.vim</a></td></tr>
<tr class="rowodd"><td>progress</td><td><a href="http://www.zeta.org.au/~philu/vim/progress.vim">http://www.zeta.org.au/~philu/vim/progress.vim</a></td></tr>
<tr class="roweven"><td>prolog</td><td><a href="http://jeanluc-picard.de/vim/syntax/prolog.vim">http://jeanluc-picard.de/vim/syntax/prolog.vim</a></td></tr>
<tr class="rowodd"><td>ptcap</td><td><a href="http://folk.uio.no/hakonrk/vim/syntax/ptcap.vim">http://folk.uio.no/hakonrk/vim/syntax/ptcap.vim</a></td></tr>
<tr class="roweven"><td>r</td><td><a href="http://www.tompayne.org/vim/syntax/r.vim">http://www.tompayne.org/vim/syntax/r.vim</a></td></tr>
<tr class="rowodd"><td>ratpoison</td><td><a href="http://mugca.cc.monash.edu.au/~djkea2/vim/syntax/ratpoison.vim">http://mugca.cc.monash.edu.au/~djkea2/vim/syntax/ratpoison.vim</a></td></tr>
<tr class="roweven"><td>readline</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>rebol</td><td><a href="http://www.eandem.co.uk/mrw/vim">http://www.eandem.co.uk/mrw/vim</a></td></tr>
<tr class="roweven"><td>registry</td><td><a href="http://www.mggen.com/vim/syntax/registry.zip">http://www.mggen.com/vim/syntax/registry.zip</a></td></tr>
<tr class="rowodd"><td>remind</td><td><a href="http://digilander.iol.it/alberanid/vim/syntax/remind.vim">http://digilander.iol.it/alberanid/vim/syntax/remind.vim</a></td></tr>
<tr class="roweven"><td>rexx</td><td><a href="http://mywebpage.netscape.com/sharpPeople/vim/syntax/rexx.vim">http://mywebpage.netscape.com/sharpPeople/vim/syntax/rexx.vim</a></td></tr>
<tr class="rowodd"><td>robots</td><td><a href="http://www.mggen.com/vim/syntax/robots.zip">http://www.mggen.com/vim/syntax/robots.zip</a></td></tr>
<tr class="roweven"><td>rpcgen</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>rtf</td><td><a href="http://www.mggen.com/vim/syntax/rtf.zip">http://www.mggen.com/vim/syntax/rtf.zip</a></td></tr>
<tr class="roweven"><td>samba</td><td><a href="http://rgarciasuarez.free.fr/vim/syntax/samba.vim">http://rgarciasuarez.free.fr/vim/syntax/samba.vim</a></td></tr>
<tr class="rowodd"><td>sather</td><td><a href="http://www.fleiner.com/vim/syntax/sather.vim">http://www.fleiner.com/vim/syntax/sather.vim</a></td></tr>
<tr class="roweven"><td>screen</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="rowodd"><td>sed</td><td><a href="http://folk.uio.no/hakonrk/vim/syntax/sed.vim">http://folk.uio.no/hakonrk/vim/syntax/sed.vim</a></td></tr>
<tr class="roweven"><td>sgml</td><td><a href="http://www.zellner.org/vim/syntax/sgml.vim">http://www.zellner.org/vim/syntax/sgml.vim</a></td></tr>
<tr class="rowodd"><td>sh</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>sicad</td><td><a href="http://lmark.mgx.hu:81/download/vim/sicad.vim">http://lmark.mgx.hu:81/download/vim/sicad.vim</a></td></tr>
<tr class="rowodd"><td>simula</td><td><a href="http://folk.uio.no/hakonrk/vim/syntax/simula.vim">http://folk.uio.no/hakonrk/vim/syntax/simula.vim</a></td></tr>
<tr class="roweven"><td>sinda</td><td><a href="http://www.naglenet.org/vim/syntax/sinda.vim">http://www.naglenet.org/vim/syntax/sinda.vim</a></td></tr>
<tr class="rowodd"><td>sindacmp</td><td><a href="http://www.naglenet.org/vim/syntax/sindacmp.vim">http://www.naglenet.org/vim/syntax/sindacmp.vim</a></td></tr>
<tr class="roweven"><td>sindaout</td><td><a href="http://www.naglenet.org/vim/syntax/sindaout.vim">http://www.naglenet.org/vim/syntax/sindaout.vim</a></td></tr>
<tr class="rowodd"><td>sm</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>smarty</td><td><a href="http://www.dwerg.net/download/vim/smarty.vim">http://www.dwerg.net/download/vim/smarty.vim</a></td></tr>
<tr class="rowodd"><td>smil</td><td><a href="http://www.helio.org/vim/syntax/smil.vim">http://www.helio.org/vim/syntax/smil.vim</a></td></tr>
<tr class="roweven"><td>sml</td><td><a href="http://www.ai.univie.ac.at/~markus/vim/syntax/sml.vim">http://www.ai.univie.ac.at/~markus/vim/syntax/sml.vim</a></td></tr>
<tr class="rowodd"><td>snnsnet</td><td><a href="http://digilander.iol.it/alberanid/vim/syntax/snnsnet.vim">http://digilander.iol.it/alberanid/vim/syntax/snnsnet.vim</a></td></tr>
<tr class="roweven"><td>snnspat</td><td><a href="http://digilander.iol.it/alberanid/vim/syntax/snnspat.vim">http://digilander.iol.it/alberanid/vim/syntax/snnspat.vim</a></td></tr>
<tr class="rowodd"><td>snnsres</td><td><a href="http://digilander.iol.it/alberanid/vim/syntax/snnsres.vim">http://digilander.iol.it/alberanid/vim/syntax/snnsres.vim</a></td></tr>
<tr class="roweven"><td>spec</td><td><a href="http://pegasus.rutgers.edu/~elflord/vim/syntax/spec.vim">http://pegasus.rutgers.edu/~elflord/vim/syntax/spec.vim</a></td></tr>
<tr class="rowodd"><td>spup</td><td><a href="http://www.ndh.net/home/sschwarzer/download/spup.vim">http://www.ndh.net/home/sschwarzer/download/spup.vim</a></td></tr>
<tr class="roweven"><td>sqlforms</td><td><a href="http://www.halostatue.ca/vim/syntax/proc.vim">http://www.halostatue.ca/vim/syntax/proc.vim</a></td></tr>
<tr class="rowodd"><td>sqr</td><td><a href="http://www.ontko.com/sqr/#editor_config_files">http://www.ontko.com/sqr/#editor_config_files</a></td></tr>
<tr class="roweven"><td>squid</td><td><a href="http://unitopia.uni-stuttgart.de/~monty/vim/syntax/squid.vim">http://unitopia.uni-stuttgart.de/~monty/vim/syntax/squid.vim</a></td></tr>
<tr class="rowodd"><td>stp</td><td><a href="http://lanzarotta.tripod.com/vim/syntax/stp.vim.zip">http://lanzarotta.tripod.com/vim/syntax/stp.vim.zip</a></td></tr>
<tr class="roweven"><td>strace</td><td><a href="http://trific.ath.cx/Ftp/vim/syntax/strace.vim">http://trific.ath.cx/Ftp/vim/syntax/strace.vim</a></td></tr>
<tr class="rowodd"><td>tags</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>tak</td><td><a href="http://www.naglenet.org/vim/syntax/tak.vim">http://www.naglenet.org/vim/syntax/tak.vim</a></td></tr>
<tr class="rowodd"><td>takcmp</td><td><a href="http://www.naglenet.org/vim/syntax/takcmp.vim">http://www.naglenet.org/vim/syntax/takcmp.vim</a></td></tr>
<tr class="roweven"><td>takout</td><td><a href="http://www.naglenet.org/vim/syntax/takout.vim">http://www.naglenet.org/vim/syntax/takout.vim</a></td></tr>
<tr class="rowodd"><td>terminfo</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>tex</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>texmf</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/texmf.vim">http://physics.muni.cz/~yeti/download/syntax/texmf.vim</a></td></tr>
<tr class="roweven"><td>tf</td><td><a href="http://www.isp.de/data/tf.vim">http://www.isp.de/data/tf.vim</a></td></tr>
<tr class="rowodd"><td>tidy</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/syntax/tidy.vim">http://mugca.its.monash.edu.au/~djkea2/vim/syntax/tidy.vim</a></td></tr>
<tr class="roweven"><td>tilde</td><td><a href="http://www.tildesoftware.net">http://www.tildesoftware.net</a></td></tr>
<tr class="rowodd"><td>trasys</td><td><a href="http://www.naglenet.org/vim/syntax/trasys.vim">http://www.naglenet.org/vim/syntax/trasys.vim</a></td></tr>
<tr class="roweven"><td>tsscl</td><td><a href="http://www.naglenet.org/vim/syntax/tsscl.vim">http://www.naglenet.org/vim/syntax/tsscl.vim</a></td></tr>
<tr class="rowodd"><td>tssgm</td><td><a href="http://www.naglenet.org/vim/syntax/tssgm.vim">http://www.naglenet.org/vim/syntax/tssgm.vim</a></td></tr>
<tr class="roweven"><td>tssop</td><td><a href="http://www.naglenet.org/vim/syntax/tssop.vim">http://www.naglenet.org/vim/syntax/tssop.vim</a></td></tr>
<tr class="rowodd"><td>uc</td><td><a href="ftp://ftp.chaoticdreams.org/pub/ut/vim/uc.vim">ftp://ftp.chaoticdreams.org/pub/ut/vim/uc.vim</a></td></tr>
<tr class="roweven"><td>uil</td><td><a href="http://jeanluc-picard.de/vim/syntax/uil.vim">http://jeanluc-picard.de/vim/syntax/uil.vim</a></td></tr>
<tr class="rowodd"><td>vim</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>vrml</td><td><a href="http://www.cs.brown.edu/~gss/vim/syntax/vrml.vim">http://www.cs.brown.edu/~gss/vim/syntax/vrml.vim</a></td></tr>
<tr class="rowodd"><td>wdiff</td><td><a href="http://alfie.ist.org/vim/syntax/wdiff.vim">http://alfie.ist.org/vim/syntax/wdiff.vim</a></td></tr>
<tr class="roweven"><td>webmacro</td><td><a href="http://www.fleiner.com/vim/syntax/webmacro.vim">http://www.fleiner.com/vim/syntax/webmacro.vim</a></td></tr>
<tr class="rowodd"><td>wget</td><td><a href="http://mugca.its.monash.edu.au/~djkea2/vim/syntax/wget.vim">http://mugca.its.monash.edu.au/~djkea2/vim/syntax/wget.vim</a></td></tr>
<tr class="roweven"><td>winbatch</td><td><a href="http://www.mggen.com/vim/syntax/winbatch.zip">http://www.mggen.com/vim/syntax/winbatch.zip</a></td></tr>
<tr class="rowodd"><td>wml</td><td><a href="http://alfie.ist.org/software/vim/syntax/wml.vim">http://alfie.ist.org/software/vim/syntax/wml.vim</a></td></tr>
<tr class="roweven"><td>xdefaults</td><td><a href="http://www.zellner.org/vim/syntax/xdefaults.vim">http://www.zellner.org/vim/syntax/xdefaults.vim</a></td></tr>
<tr class="rowodd"><td>xf86conf</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/xf86conf.vim">http://physics.muni.cz/~yeti/download/syntax/xf86conf.vim</a></td></tr>
<tr class="roweven"><td>xkb</td><td><a href="http://physics.muni.cz/~yeti/download/syntax/xkb.vim">http://physics.muni.cz/~yeti/download/syntax/xkb.vim</a></td></tr>
<tr class="rowodd"><td>xmath</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="roweven"><td>xml</td><td><a href="http://www.zellner.org/vim/syntax/xml.vim">http://www.zellner.org/vim/syntax/xml.vim</a></td></tr>
<tr class="rowodd"><td>xmodmap</td><td><a href="http://www.pcppopper.org/">http://www.pcppopper.org/</a></td></tr>
<tr class="roweven"><td>xsd</td><td><a href="http://www.zellner.org/vim/syntax/xsd.vim">http://www.zellner.org/vim/syntax/xsd.vim</a></td></tr>
<tr class="rowodd"><td>xslt</td><td><a href="http://www.zellner.org/vim/syntax/xslt.vim">http://www.zellner.org/vim/syntax/xslt.vim</a></td></tr>
<tr class="roweven"><td>xxd</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr class="rowodd"><td>yacc</td><td><a href="http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax">http://www.erols.com/astronaut/vim/index.html#vimlinks_syntax</a></td></tr>
<tr><td colspan = 2>&nbsp;</td></tr>
</table>
<?php
include("footer.php");
?>
