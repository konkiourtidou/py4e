<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>-</title>
  <style>
    html {
      line-height: 1.5;
      font-family: Georgia, serif;
      font-size: 20px;
      color: #1a1a1a;
      background-color: #fdfdfd;
    }
    body {
      margin: 0 auto;
      max-width: 36em;
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 50px;
      padding-bottom: 50px;
      hyphens: auto;
      overflow-wrap: break-word;
      text-rendering: optimizeLegibility;
      font-kerning: normal;
    }
    @media (max-width: 600px) {
      body {
        font-size: 0.9em;
        padding: 1em;
      }
    }
    @media print {
      body {
        background-color: transparent;
        color: black;
        font-size: 12pt;
      }
      p, h2, h3 {
        orphans: 3;
        widows: 3;
      }
      h2, h3, h4 {
        page-break-after: avoid;
      }
    }
    p {
      margin: 1em 0;
    }
    a {
      color: #1a1a1a;
    }
    a:visited {
      color: #1a1a1a;
    }
    img {
      max-width: 100%;
    }
    h1, h2, h3, h4, h5, h6 {
      margin-top: 1.4em;
    }
    h5, h6 {
      font-size: 1em;
      font-style: italic;
    }
    h6 {
      font-weight: normal;
    }
    ol, ul {
      padding-left: 1.7em;
      margin-top: 1em;
    }
    li > ol, li > ul {
      margin-top: 0;
    }
    blockquote {
      margin: 1em 0 1em 1.7em;
      padding-left: 1em;
      border-left: 2px solid #e6e6e6;
      color: #606060;
    }
    code {
      font-family: Menlo, Monaco, 'Lucida Console', Consolas, monospace;
      font-size: 85%;
      margin: 0;
    }
    pre {
      margin: 1em 0;
      overflow: auto;
    }
    pre code {
      padding: 0;
      overflow: visible;
      overflow-wrap: normal;
    }
    .sourceCode {
     background-color: transparent;
     overflow: visible;
    }
    hr {
      background-color: #1a1a1a;
      border: none;
      height: 1px;
      margin: 1em 0;
    }
    table {
      margin: 1em 0;
      border-collapse: collapse;
      width: 100%;
      overflow-x: auto;
      display: block;
      font-variant-numeric: lining-nums tabular-nums;
    }
    table caption {
      margin-bottom: 0.75em;
    }
    tbody {
      margin-top: 0.5em;
      border-top: 1px solid #1a1a1a;
      border-bottom: 1px solid #1a1a1a;
    }
    th {
      border-top: 1px solid #1a1a1a;
      padding: 0.25em 0.5em 0.25em 0.5em;
    }
    td {
      padding: 0.125em 0.5em 0.25em 0.5em;
    }
    header {
      margin-bottom: 4em;
      text-align: center;
    }
    #TOC li {
      list-style: none;
    }
    #TOC a:not(:hover) {
      text-decoration: none;
    }
    code{white-space: pre-wrap;}
    span.smallcaps{font-variant: small-caps;}
    span.underline{text-decoration: underline;}
    div.column{display: inline-block; vertical-align: top; width: 50%;}
    div.hanging-indent{margin-left: 1.5em; text-indent: -1.5em;}
    ul.task-list{list-style: none;}
    .display.math{display: block; text-align: center; margin: 0.5rem auto;}
  </style>
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
</head>
<body>
<h1 id="αρχεία">Αρχεία</h1>
<p>   </p>
<h2 id="επιμονή">Επιμονή</h2>
<p> </p>
<p>Μέχρι στιγμής, μάθαμε πώς να γράφουμε προγράμματα και να επικοινωνούμε τις προθέσεις μας στην <em>Κεντρική Μονάδα Επεξεργασίας</em> χρησιμοποιώντας δομή επιλογής, συναρτήσεις και δομή επανάληψης. Μάθαμε πώς να δημιουργούμε και να χρησιμοποιούμε δομές δεδομένων στην <em>Κύρια μνήμη</em>. Η CPU και η μνήμη είναι εκεί όπου λειτουργεί και εκτελείται το λογισμικό μας. Εκεί συμβαίνει όλη η «σκέψη».</p>
<p>Αλλά αν θυμάστε από τις συζητήσεις μας για την αρχιτεκτονική υλικού, μόλις απενεργοποιηθεί η τροφοδοσία, ό,τι είναι αποθηκευμένο είτε στην CPU είτε στην κύρια μνήμη διαγράφεται. Έτσι, μέχρι τώρα, τα προγράμματά μας ήταν απλώς παροδική διασκέδαση, ασκήσεις για την εκμάθηση Python.</p>
<figure>
<img src="../images/arch.svg" alt="Δευτερεύουσα Μνήμη" style="height: 2.5in;"/>
<figcaption>
Δευτερεύουσα Μνήμη
</figcaption>
</figure>
<p>Σε αυτό το κεφάλαιο, αρχίζουμε να εργαζόμαστε με τη <em>Δευτερεύουσα μνήμη</em> (ή με αρχεία). Η δευτερεύουσα μνήμη δεν διαγράφεται όταν η τροφοδοσία ρεύματος σταματήσει. Επίσης, στην περίπτωση μιας μονάδας flash USB, τα δεδομένα που γράφουμε με τα προγράμματά μας μπορούν να αφαιρεθούν από το σύστημά μας και να μεταφερθούν σε άλλο σύστημα.</p>
<p>Θα επικεντρωθούμε κυρίως στην ανάγνωση και τη σύνταξη αρχείων κειμένου όπως αυτά που δημιουργούμε σε ένα πρόγραμμα επεξεργασίας κειμένου. Αργότερα θα δούμε πώς δουλεύουμε με αρχεία βάσης δεδομένων που είναι δυαδικά αρχεία, ειδικά σχεδιασμένα για ανάγνωση και εγγραφή μέσω λογισμικού βάσης δεδομένων.</p>
<h2 id="άνοιγμα-αρχείων">Άνοιγμα αρχείων</h2>
<p>   </p>
<p>Όταν θέλουμε να διαβάσουμε ή να γράψουμε ένα αρχείο (ας πούμε στον σκληρό δίσκο), πρέπει πρώτα να <em>ανοίξουμε (open)</em> το αρχείο. Το άνοιγμα του αρχείου επικοινωνεί με το λειτουργικό σας σύστημα, το οποίο γνωρίζει πού αποθηκεύονται τα δεδομένα του κάθε αρχείου. Όταν ανοίγετε ένα αρχείο, ζητάτε από το λειτουργικό σύστημα να βρει το αρχείο βάση ονόματος και να βεβαιωθεί ότι το αρχείο υπάρχει. Σε αυτό το παράδειγμα, ανοίγουμε το αρχείο <em>mbox.txt</em>, το οποίο θα πρέπει να είναι αποθηκευμένο στον ίδιο φάκελο, στον οποίο βρίσκεστε όταν ξεκινάτε την Python. Μπορείτε να κάνετε λήψη αυτού του αρχείου από το <a href="http://www.gr.py4e.com/code3/mbox.txt">www.gr.py4e.com/code3/mbox.txt</a></p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox.txt&#39;)
&gt;&gt;&gt; print(fhand)
&lt;_io.TextIOWrapper name=&#39;mbox.txt&#39; mode=&#39;r&#39; encoding=&#39;cp1252&#39;&gt;</code></pre>
<p> </p>
<p>Εάν το <code>open</code> ολοκληρωθεί με επιτυχία, το λειτουργικό σύστημα μας επιστρέφει έναν <em>περιγραφέα αρχείου (file handle)</em>. Ο περιγραφέας αρχείου δεν είναι τα πραγματικά δεδομένα που περιέχονται στο αρχείο, αλλά αντίθετα είναι μια “λαβή” που μπορούμε να χρησιμοποιήσουμε για να διαβάσουμε τα δεδομένα. Σας δίνεται ένας περιγραφέας εάν υπάρχει το ζητούμενο αρχείο και έχετε τα κατάλληλα δικαιώματα για να διαβάσετε το αρχείο.</p>
<figure>
<img src="../images/handle.svg" alt="Ένας Περιγραφέας Αρχείου (File Handle)" style="height=2.0in" /><figcaption aria-hidden="true">Ένας Περιγραφέας Αρχείου (File Handle)</figcaption>
</figure>
<p>Εάν το αρχείο δεν υπάρχει, το <code>open</code> θα αποτύχει με ένα traceback και δεν θα δημιουργηθεί περιγραφέας για πρόσβαση στα περιεχόμενα του αρχείου:</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;stuff.txt&#39;)
Traceback (most recent call last):
File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
FileNotFoundError: [Errno 2] No such file or directory: &#39;stuff.txt&#39;</code></pre>
<p>Αργότερα θα χρησιμοποιήσουμε τα <code>try</code> και <code>except</code> για να αντιμετωπίσουμε, πιο χαριτωμένα, την κατάσταση όπου επιχειρούμε να ανοίξουμε ένα αρχείο που δεν υπάρχει.</p>
<h2 id="αρχεία-κειμένου-και-γραμμές">Αρχεία κειμένου και γραμμές</h2>
<p>Ένα αρχείο κειμένου μπορούν να θεωρηθεί ως μια ακολουθία γραμμών, όπως μια συμβολοσειρά Python μπορεί να θεωρηθεί ως μια ακολουθία χαρακτήρων. Για παράδειγμα, αυτό είναι ένα δείγμα αρχείου κειμένου που καταγράφει τη δραστηριότητα αλληλογραφίας από διάφορα άτομα σε μια ομάδα ανάπτυξης έργου ανοιχτού κώδικα:</p>
<pre class="{text}"><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
Return-Path: &lt;postmaster@collab.sakaiproject.org&gt;
Date: Sat, 5 Jan 2008 09:12:18 -0500
To: source@collab.sakaiproject.org
From: stephen.marquard@uct.ac.za
Subject: [sakai] svn commit: r39772 - content/branches/
Details: http://source.sakaiproject.org/viewsvn/?view=rev&amp;rev=39772
...</code></pre>
<p>Ολόκληρο το αρχείο αλληλεπιδράσεων αλληλογραφίας είναι διαθέσιμο στο <a href="http://www.gr.py4e.com/code3/mbox.txt">www.gr.py4e.com/code3/mbox.txt</a></p>
<p>και μια μικρότερη έκδοση του αρχείου είναι διαθέσιμη στο <a href="http://www.gr.py4e.com/code3/mbox-short.txt">www.gr.py4e.com/code3/mbox-short.txt</a></p>
<p>Αυτά τα αρχεία είναι σε τυπική μορφή αρχείου που περιέχει πολλά μηνύματα αλληλογραφίας. Οι γραμμές που ξεκινούν με “From (Από)” διαχωρίζουν τα μηνύματα και οι γραμμές που ξεκινούν με “From:” αποτελούν μέρος των μηνυμάτων. Για περισσότερες πληροφορίες σχετικά με τη μορφή mbox, ανατρέξτε στο <a href="https://en.wikipedia.org/wiki/Mbox" class="uri">https://en.wikipedia.org/wiki/Mbox</a>.</p>
<p>Για να χωρίσετε το αρχείο σε γραμμές, υπάρχει ένας ειδικός χαρακτήρας που αντιπροσωπεύει το “τέλος της γραμμής” που ονομάζεται χαρακτήρας <em>newline</em>.</p>
<p> </p>
<p>Στην Python, σε σταθερές συμβολοσειρών, αντιπροσωπεύουμε τον χαρακτήρα <em>newline</em> ως ανάστροφη κάθετο-n (). Παρόλο που αυτό μοιάζει με δύο χαρακτήρες, είναι στην πραγματικότητα ένας μόνο χαρακτήρας. Όταν εξετάζουμε τη μεταβλητή πληκτρολογώντας “stuff” στον διερμηνέα, μας δείχνει το <code>\n</code> στη συμβολοσειρά, αλλά όταν χρησιμοποιούμε την <code>print</code> για να εμφανίσουμε τη συμβολοσειρά, βλέπουμε τη συμβολοσειρά σπασμένη σε δύο γραμμές από τον χαρακτήρα νέας γραμμής.</p>
<pre class="python"><code>&gt;&gt;&gt; stuff = &#39;Hello\nWorld!&#39;
&gt;&gt;&gt; stuff
&#39;Hello\nWorld!&#39;
&gt;&gt;&gt; print(stuff)
Hello
World!
&gt;&gt;&gt; stuff = &#39;X\nY&#39;
&gt;&gt;&gt; print(stuff)
X
Y
&gt;&gt;&gt; len(stuff)
3</code></pre>
<p>Μπορείτε επίσης να δείτε ότι το μήκος της συμβολοσειράς <code>X\nY</code> είναι <em>τρεις</em> χαρακτήρες, επειδή ο χαρακτήρας νέας γραμμής είναι ένας χαρακτήρας.</p>
<p>Έτσι, όταν κοιτάμε τις γραμμές σε ένα αρχείο, πρέπει να <em>φανταστούμε</em> ότι υπάρχει ένας ειδικός, αόρατος χαρακτήρας, που ονομάζεται νέα γραμμή, στο τέλος κάθε γραμμής, που σηματοδοτεί το τέλος της γραμμής.</p>
<p>Ο χαρακτήρας νέας γραμμής, λοιπόν, διαχωρίζει τους χαρακτήρες του αρχείου σε γραμμές.</p>
<h2 id="ανάγνωση-αρχείων">Ανάγνωση αρχείων</h2>
<p> </p>
<p>Ενώ ο <em>περιγραφέας αρχείου</em> δεν περιέχει τα δεδομένα για το αρχείο, είναι πολύ εύκολο να τον χρησιμοποιήσετε και να δημιουργήσετε έναν βρόχο <code>for</code> για να διαβάσετε και να μετρήσετε κάθε μία από τις γραμμές σε ένα αρχείο:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
πλήθος = 0
for γραμμή in fhand:
    πλήθος = πλήθος + 1
print(&#39;Πλήθος γραμμών:&#39;, πλήθος)

# Code: http://www.gr.py4e.com/code3/open.py</code></pre>
<p>Μπορούμε να χρησιμοποιήσουμε τον περιγραφέα αρχείου ως μια ακολουθία στον βρόχο <code>for</code>. Ο παραπάνω βρόχος <code>for</code>, απλώς μετράει τον αριθμό των γραμμών στο αρχείο και τις εκτυπώνει. Η κατά προσέγγιση μετάφραση του βρόχου <code>for</code> στα αγγλικά είναι, “για κάθε γραμμή στο αρχείο που αντιπροσωπεύεται από τον περιγραφέα του αρχείου, προσθέστε ένα στη μεταβλητή <code>count</code>.</p>
<p>Ο λόγος που η συνάρτηση <code>open</code> δεν διαβάζει ολόκληρο το αρχείο είναι ότι το αρχείο μπορεί να είναι αρκετά μεγάλο, με πολλά gigabyte δεδομένων. Η δήλωση <code>open</code> χρειάζεται τον ίδιο χρόνο ανεξάρτητα από το μέγεθος του αρχείου. Ο βρόχος <code>for</code> είναι αυτός που προκαλεί, στην πραγματικότητα, την ανάγνωση των δεδομένων από το αρχείο.</p>
<p>Όταν διαβάζεται το αρχείο χρησιμοποιώντας έναν βρόχο <code>for</code>, με αυτόν τον τρόπο, η Python φροντίζει να διασπάσει τα δεδομένα του αρχείου σε ξεχωριστές γραμμές χρησιμοποιώντας τον χαρακτήρα νέας γραμμής. Η Python διαβάζει κάθε γραμμή μέσω του χαρακτήρα νέας γραμμής και περιλαμβάνει το χαρακτήρα νέας γραμμής, ως τον τελευταίο χαρακτήρα, στη μεταβλητή <code>γραμμή</code> σε κάθε επανάληψη του βρόχου <code>for</code>.</p>
<p>Επειδή ο βρόχος <code>for</code> διαβάζει τα δεδομένα μία γραμμή τη φορά, μπορεί να διαβάσει και να μετρήσει αποτελεσματικά τις γραμμές σε πολύ μεγάλα αρχεία χωρίς να εξαντληθεί η κύρια μνήμη για την αποθήκευση των δεδομένων. Το παραπάνω πρόγραμμα μπορεί να μετρήσει τις γραμμές σε αρχείο οποιουδήποτε μεγέθους χρησιμοποιώντας πολύ λίγη μνήμη, αφού κάθε γραμμή διαβάζεται, μετράται και στη συνέχεια απορρίπτεται.</p>
<p>Εάν γνωρίζετε ότι το αρχείο είναι σχετικά μικρό σε σύγκριση με το μέγεθος της κύριας μνήμης σας, μπορείτε να διαβάσετε ολόκληρο το αρχείο σε μία συμβολοσειρά, χρησιμοποιώντας τη μέθοδο <code>read</code> στον περιγραφέα του αρχείου.</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox-short.txt&#39;)
&gt;&gt;&gt; inp = fhand.read()
&gt;&gt;&gt; print(len(inp))
94626
&gt;&gt;&gt; print(inp[:20])
From stephen.marquar</code></pre>
<p>Σε αυτό το παράδειγμα, ολόκληρο το περιεχόμενο (και οι 94.626 χαρακτήρες) του αρχείου <em>mbox-short.txt</em> διαβάζονται απευθείας στη μεταβλητή <code>inp</code>. Χρησιμοποιούμε διαμέριση συμβολοσειράς για να εκτυπώσουμε τους πρώτους 20 χαρακτήρες των δεδομένων συμβολοσειράς που είναι αποθηκευμένα στο <code>inp</code>.</p>
<p>Όταν το αρχείο διαβάζεται με αυτόν τον τρόπο, όλοι οι χαρακτήρες, συμπεριλαμβανομένων όλων των γραμμών και χαρακτήρων νέας γραμμής, είναι μια μεγάλη συμβολοσειρά στη μεταβλητή <code>inp</code>. Είναι καλή ιδέα να αποθηκεύεται η έξοδος του <code>read</code> ως μεταβλητή, επειδή κάθε κλήση της <code>read</code> εξαντλεί τους πόρους:</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox-short.txt&#39;)
&gt;&gt;&gt; print(len(fhand.read()))
94626
&gt;&gt;&gt; print(len(fhand.read()))
0</code></pre>
<p>Θυμηθείτε ότι αυτή η μορφή της συνάρτησης <code>open</code> θα πρέπει να χρησιμοποιείται μόνο εάν τα δεδομένα του αρχείου χωράνε άνετα στην κύρια μνήμη του υπολογιστή σας. Εάν το αρχείο είναι πολύ μεγάλο για να χωρέσει στην κύρια μνήμη, θα πρέπει να γράψετε το πρόγραμμά σας έτσι ώστε να διαβάσει το αρχείο σε κομμάτια, χρησιμοποιώντας έναν βρόχο <code>for</code> ή <code>while</code>.</p>
<h2 id="φιλτράρισμα-αρχείου">Φιλτράρισμα αρχείου</h2>
<p>Όταν κάνετε φιλτράρισμα δεδομένων σε ένα αρχείο, ένα πολύ συνηθισμένο μοτίβο είναι να διαβάζετε το αρχείο, αγνοώντας τις περισσότερες γραμμές και να επεξεργάζεστε μόνο τις γραμμές που πληρούν μια συγκεκριμένη συνθήκη. Μπορούμε να συνδυάσουμε την ανάγνωση ενός αρχείου με μεθόδους συμβολοσειράς, για να δημιουργήσουμε απλούς μηχανισμούς φιλτραρίσματος.</p>
<p> </p>
<p>Για παράδειγμα, αν θέλαμε να διαβάσουμε ένα αρχείο και να εκτυπώσουμε μόνο τις γραμμές που αρχίζουν με το πρόθεμα “From:”, θα μπορούσαμε να χρησιμοποιήσουμε τη μέθοδο συμβολοσειράς <em>startswith</em> για να επιλέξουμε μόνο τις γραμμές με το επιθυμητό πρόθεμα:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for γραμμή in fhand:
    if γραμμή.startswith(&#39;From:&#39;):
        print(γραμμή)

# Code: http://www.gr.py4e.com/code3/search1.py</code></pre>
<p>Όταν εκτελείται αυτό το πρόγραμμα, έχουμε την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>From: stephen.marquard@uct.ac.za

From: louis@media.berkeley.edu

From: zqian@umich.edu

From: rjlowe@iupui.edu
...</code></pre>
<p>Η έξοδος φαίνεται υπέροχη αφού οι μόνες γραμμές που βλέπουμε είναι αυτές που ξεκινούν με “From:”, αλλά γιατί βλέπουμε τις επιπλέον κενές γραμμές; Αυτό οφείλεται στον αόρατο χαρακτήρα <em>newline</em>. Κάθε μία από τις γραμμές τελειώνει με έναν χαρακτήρα νέας γραμμής, επομένως η δήλωση <code>print</code> εκτυπώνει τη συμβολοσειρά της μεταβλητή <em>γραμμή</em>, που όμως περιλαμβάνει έναν χαρακτήρα νέας γραμμής και στη συνέχεια η <code>print</code> προσθέτει <em>άλλη μία</em> νέα γραμμή, με αποτέλεσμα το εφέ διπλού διαστήματος που βλέπουμε.</p>
<p>Θα μπορούσαμε να χρησιμοποιήσουμε την διαμέριση γραμμής, για να εκτυπώσουμε τους χαρακτήρες εκτός από τον τελευταίο, αλλά μια απλούστερη προσέγγιση είναι να χρησιμοποιήσουμε τη μέθοδο <em>rstrip</em> που αφαιρεί τους λευκούς χαρακτήρες από τη δεξιά πλευρά μιας συμβολοσειράς ως εξής:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for γραμμή in fhand:
    γραμμή = γραμμή.rstrip()
    if γραμμή.startswith(&#39;From:&#39;):
        print(γραμμή)

# Code: http://www.gr.py4e.com/code3/search2.py</code></pre>
<p>Όταν εκτελείται αυτό το πρόγραμμα, έχουμε την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>From: stephen.marquard@uct.ac.za
From: louis@media.berkeley.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu
From: cwen@iupui.edu
...</code></pre>
<p>Καθώς τα προγράμματα επεξεργασίας αρχείων σας γίνονται πιο περίπλοκα, μπορεί να θελήσετε να δομήσετε τους βρόχους αναζήτησης χρησιμοποιώντας το <code>continue</code>. Η βασική ιδέα του βρόχου αναζήτησης είναι ότι ψάχνετε για “ενδιαφέρουσες” γραμμές και ουσιαστικά παρακάμπτετε τις “αδιάφορες” γραμμές. Και μετά, όταν βρίσκουμε μια ενδιαφέρουσα γραμμή, κάνουμε κάτι με αυτή τη γραμμή.</p>
<p>Μπορούμε να δομήσουμε τον βρόχο για να ακολουθήσουμε το μοτίβο της παράκαμψης αδιάφορων γραμμών ως εξής:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for γραμμή in fhand:
    γραμμή = γραμμή.rstrip()
    # Παράκαμψη `αδιάφορων` γραμμών
    if not γραμμή.startswith(&#39;From:&#39;):
        continue
    # Επεξεργασία &#39;ενδιαφερόντων&#39; γραμμών
    print(γραμμή)

# Code: http://www.gr.py4e.com/code3/search3.py</code></pre>
<p>Η έξοδος του προγράμματος είναι η ίδια. Στα αγγλικά, οι αδιάφορες γραμμές είναι εκείνες που δεν ξεκινούν με “From:”, τις οποίες παραλείπουμε χρησιμοποιώντας το <code>continue</code>. Για τις “ενδιαφέρουσες” γραμμές (δηλαδή αυτές που ξεκινούν με “From:”) εκτελούμε την επεξεργασία σε αυτές τις γραμμές.</p>
<p>Μπορούμε να χρησιμοποιήσουμε τη μέθοδο συμβολοσειράς <code>find</code> για να προσομοιώσουμε την αναζήτηση των προγραμμάτων επεξεργασίας κειμένου, που βρίσκει γραμμές στις οποίες περιλαμβάνεται, οπουδήποτε, η συμβολοσειρά αναζήτησης. Μιας και το <code>find</code> αναζητά την εμφάνιση μιας συμβολοσειράς μέσα σε μια άλλη συμβολοσειρά και είτε επιστρέφει τη θέση της συμβολοσειράς είτε -1, εάν η συμβολοσειρά δεν βρέθηκε, μπορούμε να γράψουμε τον ακόλουθο βρόχο για να εμφανίσουμε τις γραμμές που περιέχουν τη συμβολοσειρά “<span class="citation" data-cites="uct.ac">@uct.ac</span> .za” (δηλαδή, προέρχονται από το Πανεπιστήμιο του Κέιπ Τάουν στη Νότια Αφρική):</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for γραμμή in fhand:
    γραμμή = γραμμή.rstrip()
    if γραμμή.find(&#39;@uct.ac.za&#39;) == -1: continue
    print(γραμμή)

# Code: http://www.gr.py4e.com/code3/search4.py</code></pre>
<p>Ο οποίος παράγει την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
X-Authentication-Warning: set sender to stephen.marquard@uct.ac.za using -f
From: stephen.marquard@uct.ac.za
Author: stephen.marquard@uct.ac.za
From david.horwitz@uct.ac.za Fri Jan  4 07:02:32 2008
X-Authentication-Warning: set sender to david.horwitz@uct.ac.za using -f
From: david.horwitz@uct.ac.za
Author: david.horwitz@uct.ac.za
...</code></pre>
<p>Εδώ χρησιμοποιούμε επίσης τη σύντομη μορφή της εντολής <code>if</code>, όπου βάζουμε το <code>continue</code> στην ίδια γραμμή με το <code>if</code>. Αυτή η σύντομη μορφή του <code>if</code> λειτουργεί το ίδιο όπως αν το <code>continue</code> να ήταν στην επόμενη γραμμή και με εσοχή.</p>
<h2 id="επιτρέποντας-στον-χρήστη-να-επιλέξει-το-όνομα-του-αρχείου">Επιτρέποντας στον χρήστη να επιλέξει το όνομα του αρχείου</h2>
<p>Πραγματικά, δεν θέλουμε να πρέπει να επεξεργαζόμαστε τον κώδικά μας σε Python κάθε φορά που θέλουμε να επεξεργαστούμε ένα διαφορετικό αρχείο. Θα ήταν πιο βολικό να ζητάμε από τον χρήστη να εισάγει τη συμβολοσειρά ονόματος αρχείου, κάθε φορά που εκτελείται το πρόγραμμα, ώστε να μπορεί να χρησιμοποιήσει το πρόγραμμά μας σε διαφορετικά αρχεία, χωρίς να αλλάξει τον κώδικα της Python.</p>
<p>Αυτό είναι πολύ απλό να υλοποιηθεί, διαβάζοντας το όνομα του αρχείου από τον χρήστη, χρησιμοποιώντας την <code>input</code> ως εξής:</p>
<pre class="python"><code>fname = input(&#39;Εισαγάγετε το όνομα του αρχείου: &#39;)
fhand = open(fname)
πλήθος = 0
for γραμμή in fhand:
    if γραμμή.startswith(&#39;Subject:&#39;):
        πλήθος = πλήθος + 1
print(&#39;Υπάρχουν &#39;, πλήθος, &#39; γραμμές θέματος στο &#39;, fname)

# Code: http://www.gr.py4e.com/code3/search6.py</code></pre>
<p>Διαβάζουμε το όνομα του αρχείου από τον χρήστη και το τοποθετούμε σε μια μεταβλητή με το όνομα <code>fname</code> και ανοίγουμε αυτό το αρχείο. Τώρα μπορούμε να εκτελέσουμε το πρόγραμμα, επανειλημμένα, για διαφορετικά αρχεία.</p>
<pre class="{text}"><code>python search6.py
Εισαγάγετε το όνομα του αρχείου: mbox.txt
Υπάρχουν 1797 γραμμές θέματος στο mbox.txt

python search6.py
Εισαγάγετε το όνομα του αρχείου: mbox-short.txt
Υπάρχουν 27 γραμμές θέματος στο mbox-short.txt</code></pre>
<p>Πριν κρυφοκοιτάξετε την επόμενη ενότητα, ρίξτε μια ματιά στο παραπάνω πρόγραμμα και αναρωτηθείτε, “Τι θα μπορούσε να πάει στραβά εδώ;” ή “Τι μπορεί να κάνει ο φιλικός χρήστης μας, που θα έκανε το όμορφο μικρό μας πρόγραμμα να σταματήσει, άχαρα, την εκτέλεσή του με ένα traceback, κάνοντάς μας να φαινόμαστε όχι και τόσο καλοί στα μάτια των χρηστών μας;”</p>
<h2 id="χρήση-try-except-και-open">Χρήση <code>try, except,</code> και <code>open</code></h2>
<p>Σας είπα να μην κρυφοκοιτάξετε. Αυτή είναι η τελευταία σας ευκαιρία.</p>
<p>Τι γίνεται αν ο χρήστης μας πληκτρολογήσει κάτι που δεν είναι όνομα αρχείου;</p>
<pre class="{text}"><code>python search6.py
Εισαγάγετε το όνομα του αρχείου: missing.txt
Traceback (most recent call last):
  File &quot;search6.py&quot;, line 2, in &lt;module&gt;
    fhand = open(fname)
FileNotFoundError: [Errno 2] No such file or directory: &#39;missing.txt&#39;

python search6.py
Εισαγάγετε το όνομα του αρχείου: na na boo boo
Traceback (most recent call last):
  File &quot;search6.py&quot;, line 2, in &lt;module&gt;
    fhand = open(fname)
FileNotFoundError: [Errno 2] No such file or directory: &#39;na na boo boo&#39;</code></pre>
<p>Μην γελάτε. Οι χρήστες θα κάνουν τελικά ό,τι είναι δυνατό για να κολλήσουν τα προγράμματά σας, είτε κατά λάθος είτε με κακόβουλη πρόθεση. Στην πραγματικότητα, ένα σημαντικό μέρος οποιασδήποτε ομάδας ανάπτυξης λογισμικού είναι ένα άτομο ή μια ομάδα ατόμων, που ονομάζεται <em>Quality Assurance (Διασφάλιση Ποιότητας)</em> (ή QA για συντομία), των οποίων η ίδια δουλειά είναι να κάνουν τα πιο τρελά πράγματα σε μια προσπάθεια να “σπάσουν” το λογισμικό που ο προγραμματιστής δημιούργησε.</p>
<p>  </p>
<p>Η ομάδα QA είναι υπεύθυνη για την εύρεση των ελαττωμάτων στα προγράμματα προτού παραδώσουμε το πρόγραμμα στους τελικούς χρήστες, που μπορεί να αγοράσουν το λογισμικό ή να πληρώσουν το μισθό μας για τη σύνταξη του λογισμικού. Έτσι, η ομάδα QA είναι ο καλύτερος φίλος του προγραμματιστή.</p>
<p>     </p>
<p>Τώρα λοιπόν που βλέπουμε το ψεγάδι στο πρόγραμμα, μπορούμε να το διορθώσουμε, κομψά, χρησιμοποιώντας τη δομή <code>try</code>/<code>except</code>. Πρέπει να αντιληφθούμε ότι η κλήση της <code>open</code> ενδέχεται να αποτύχει και να προσθέσουμε κατάλληλο κώδικα ανάκτησης όταν η <code>open</code> αποτύχει ως εξής:</p>
<pre class="python"><code>fname = input(&#39;Εισαγάγετε το όνομα του αρχείου: &#39;)
try:
    fhand = open(fname)
except:
    print(&#39;Δεν είναι δυνατό το άνοιγμα του αρχείου:&#39;, fname)
    exit()
πλήθος = 0
for γραμμή in fhand:
    if γραμμή.startswith(&#39;Subject:&#39;):
        πλήθος = πλήθος + 1
print(&#39;Υπάρχουν &#39;, πλήθος, &#39; γραμμές θέματος στο &#39;, fname)

# Code: http://www.gr.py4e.com/code3/search7.py</code></pre>
<p>Η συνάρτηση <code>exit</code> τερματίζει το πρόγραμμα. Είναι μια συνάρτηση που καλούμε και δεν επιστρέφει ποτέ. Τώρα, όταν ο χρήστης μας (ή η ομάδα QA) πληκτρολογεί ανόητα ή λάθος ονόματα αρχείων, τα “πιάνουμε” και τα ξεπερνάμε με χάρη:</p>
<pre class="{text}"><code>python search7.py
Εισαγάγετε το όνομα του αρχείου: mbox.txt
Υπάρχουν 1797 γραμμές θέματος στο mbox.txt

python search7.py
Εισαγάγετε το όνομα του αρχείου: na na boo boo
Δεν είναι δυνατό το άνοιγμα του αρχείου: na na boo boo</code></pre>
<p></p>
<p>Η προστασία της κλήσης <code>open</code> είναι ένα καλό παράδειγμα της σωστής χρήσης των <code>try</code> και <code>except</code> σε ένα πρόγραμμα Python. Χρησιμοποιούμε τον όρο “Pythonic” όταν κάνουμε κάτι με τον “τρόπο της Python”. Θα μπορούσαμε να πούμε ότι το παραπάνω παράδειγμα είναι ο Pythonic τρόπος για να ανοίξετε ένα αρχείο.</p>
<p>Μόλις γίνετε πιο ειδικοί στην Python, μπορείτε να συμμετάσχετε σε μονομαχίες με άλλους προγραμματιστές Python για να αποφασίσετε ποια από τις δύο ισοδύναμες λύσεις σε ένα πρόβλημα είναι “πιο Python”. Ο στόχος να είσαι «πιο Pythonic» αντικατοπτρίζει την ιδέα ότι ο προγραμματισμός είναι εν μέρει μηχανική και εν μέρει τέχνη. Δεν μας ενδιαφέρει πάντα να κάνουμε κάτι που λειτουργεί, θέλουμε επίσης η λύση μας να είναι κομψή και να εκτιμάται ως κομψή από τους ομοτίμους μας.</p>
<h2 id="γραφή-σε-αρχεία">Γραφή σε αρχεία</h2>
<p> </p>
<p>Για να γράψετε ένα αρχείο, πρέπει να το ανοίξετε με τη λειτουργία “w” ως δεύτερη παράμετρο:</p>
<pre class="python"><code>&gt;&gt;&gt; fout = open(&#39;output.txt&#39;, &#39;w&#39;)
&gt;&gt;&gt; print(fout)
&lt;_io.TextIOWrapper name=&#39;output.txt&#39; mode=&#39;w&#39; encoding=&#39;cp1252&#39;&gt;</code></pre>
<p>Εάν το αρχείο υπάρχει ήδη, το άνοιγμα του σε λειτουργία εγγραφής διαγράφει τα προηγούμενα δεδομένα και τα αντικαθιστά με τα καινούρια, οπότε να είστε προσεκτικοί! Εάν το αρχείο δεν υπάρχει, δημιουργείται ένα νέο.</p>
<p>Η μέθοδος <code>write</code> του αντικειμένου χειρισμού αρχείου τοποθετεί δεδομένα στο αρχείο, επιστρέφοντας τον αριθμό των χαρακτήρων που γράφτηκαν. Η προεπιλεγμένη λειτουργία εγγραφής είναι κείμενο για εγγραφή (και ανάγνωση) συμβολοσειρών.</p>
<pre class="python"><code>&gt;&gt;&gt; γραμμή1 = &quot;Αυτό το κλαδί, είναι\n&quot;
&gt;&gt;&gt; fout.write(γραμμή1)
21</code></pre>
<p></p>
<p>Και πάλι, το αντικείμενο αρχείου παρακολουθεί τη θέση του, οπότε αν καλέσετε ξανά την <code>write</code>, προσθέτει τα νέα δεδομένα στο τέλος.</p>
<p>Πρέπει να φροντίσουμε να διαχειριζόμαστε τα άκρα των γραμμών, καθώς γράφουμε στο αρχείο, εισάγοντας ρητά τον χαρακτήρα νέας γραμμής όταν θέλουμε να τερματίσουμε μια γραμμή. Η εντολή <code>print</code> προσθέτει αυτόματα μια νέα γραμμή, αλλά η μέθοδος <code>write</code> δεν προσθέτει τη νέα γραμμή αυτόματα.</p>
<pre class="python"><code>&gt;&gt;&gt; γραμμή2 = &#39;το έμβλημα του τόπου μας.\n&#39;
&gt;&gt;&gt; fout.write(γραμμή2)
26</code></pre>
<p>Όταν ολοκληρώσετε τη σύνταξη, πρέπει να κλείσετε το αρχείο για να βεβαιωθείτε ότι και το τελευταίο bit δεδομένων είναι φυσικά γραμμένο στο δίσκο, ώστε να μην χαθεί εάν διακοπεί η τροφοδοσία ρεύμετος.</p>
<pre class="python"><code>&gt;&gt;&gt; fout.close()</code></pre>
<p>Θα μπορούσαμε να κλείσουμε και τα αρχεία που ανοίγουμε για ανάγνωση, αλλά μπορεί να είμαστε και λίγο απρόσεκτοι αν μόνο ανοίγουμε κάποια αρχεία, καθώς η Python φροντίζει ώστε όλα τα ανοιχτά αρχεία να κλείνουν όταν τελειώνει το πρόγραμμα. Όταν γράφουμε όμως σε αρχεία, θέλουμε να τα κλείνουμε ξεκάθαρα, για να μην αφήνουμε τίποτα στην τύχη.</p>
<p> </p>
<h2 id="εκσφαλμάτωση">Εκσφαλμάτωση</h2>
<p> </p>
<p>Όταν διαβάζετε και γράφετε αρχεία, ενδέχεται να αντιμετωπίσετε προβλήματα με τους λευκούς χαρακτήρες. Αυτά τα σφάλματα μπορεί να είναι δύσκολο να εντοπιστούν, επειδή τα κενά, τα tab και οι νέες γραμμές είναι συνήθως αόρατα:</p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;1 2\t 3\n 4&#39;
&gt;&gt;&gt; print(s)
1 2  3
 4</code></pre>
<p>  </p>
<p>Η ενσωματωμένη συνάρτηση <code>repr</code> μπορεί να βοηθήσει. Λαμβάνει οποιοδήποτε αντικείμενο ως όρισμα και επιστρέφει μια παράσταση συμβολοσειράς του αντικειμένου. Για συμβολοσειρές, αναπαρηστά τους χαρακτήρες κενού διαστήματος με ακολουθίες ανάστροφης κάθετης:</p>
<pre class="python"><code>&gt;&gt;&gt; print(repr(s))
&#39;1 2\t 3\n 4&#39;</code></pre>
<p>Αυτό μπορεί να είναι χρήσιμο για τον εντοπισμό σφαλμάτων.</p>
<p>Ένα άλλο πρόβλημα που μπορεί να αντιμετωπίσετε είναι ότι διαφορετικά συστήματα χρησιμοποιούν διαφορετικούς χαρακτήρες για να υποδείξουν το τέλος μιας γραμμής. Ορισμένα συστήματα χρησιμοποιούν μια νέα γραμμή, που αναπαρίσταται με “”. Άλλα χρησιμοποιούν έναν χαρακτήρα επιστροφής, που αναπαρίσταται με «. Κάποια χρησιμοποιούν και τα δύο. Εάν μετακινείτε αρχεία μεταξύ διαφορετικών συστημάτων, αυτές οι ασυνέπειες ενδέχεται να προκαλέσουν προβλήματα.</p>
<p></p>
<p>Για τα περισσότερα συστήματα, υπάρχουν εφαρμογές για μετατροπή από τη μια μορφή στην άλλη. Μπορείτε να τα βρείτε (και να διαβάσετε περισσότερα για αυτό το ζήτημα) στη διεύθυνση <a href="https://wikipedia.org/wiki/Newline">https://www.wikipedia.org/wiki/Newline</a>. Ή, φυσικά, θα μπορούσατε να γράψετε μία μόνοι σας.</p>
<h2 id="γλωσσάριο">Γλωσσάριο</h2>
<dl>
<dt>catch</dt>
<dd>Για να αποτρέψετε μια εξαίρεση από τον τερματισμό ενός προγράμματος χρησιμοποιώντας την εντολή <code>try</code> και <code>except</code>.
</dd>
<dt>Pythonic</dt>
<dd>Μια τεχνική που λειτουργεί κομψά στην Python. “Η χρήση του try και except είναι ο <em>Pythonic</em> τρόπος ανάκτησης από αρχεία που λείπουν”.
</dd>
<dt>Quality Assurance - Διασφάλιση Ποιότητας</dt>
<dd>Ένα άτομο ή μια ομάδα που επικεντρώνεται στη διασφάλιση της συνολικής ποιότητας ενός προϊόντος λογισμικού. Το QA συχνά εμπλέκεται στη δοκιμή ενός προϊόντος και στον εντοπισμό προβλημάτων πριν από την κυκλοφορία του προϊόντος.
</dd>
<dt>αρχείο κειμένου</dt>
<dd>Μια ακολουθία χαρακτήρων που είναι αποθηκευμένοι σε μονάδα μόνιμη αποθήκευση, όπως ένας σκληρός δίσκος.
</dd>
<dt>νέα γραμμή</dt>
<dd>Ένας ειδικός χαρακτήρας που χρησιμοποιείται σε αρχεία και συμβολοσειρές για να υποδείξει το τέλος μιας γραμμής.
</dd>
</dl>
<h2 id="ασκήσεις">Ασκήσεις</h2>
<p><strong>Άσκηση 1: Γράψτε ένα πρόγραμμα για να διαβάσετε ένα αρχείο και να εκτυπώσετε τα περιεχόμενα του αρχείου (γραμμή προς γραμμή) όλα με κεφαλαία. Η εκτέλεση του προγράμματος θα έχει ως εξής:</strong></p>
<pre class="{text}"><code>python shout.py
Εισαγάγετε το όνομα του αρχείου: mbox-short.txt
FROM STEPHEN.MARQUARD@UCT.AC.ZA SAT JAN  5 09:14:16 2008
RETURN-PATH: &lt;POSTMASTER@COLLAB.SAKAIPROJECT.ORG&gt;
RECEIVED: FROM MURDER (MAIL.UMICH.EDU [141.211.14.90])
     BY FRANKENSTEIN.MAIL.UMICH.EDU (CYRUS V2.3.8) WITH LMTPA;
     SAT, 05 JAN 2008 09:14:16 -0500</code></pre>
<p><strong>Μπορείτε να κατεβάσετε το αρχείο από</strong> <a href="http://www.gr.py4e.com/code3/mbox-short.txt">www.gr.py4e.com/code3/mbox-short.txt</a></p>
<p><strong>Άσκηση 2: Γράψτε ένα πρόγραμμα που να δέχεται ένα όνομα αρχείου και, στη συνέχεια, να διαβάζει το αρχείο αυτό και να αναζητά γραμμές της μορφής:</strong></p>
<pre class="{text}"><code>X-DSPAM-Confidence: 0.8475</code></pre>
<p><strong>Όταν συναντήσετε μια γραμμή που ξεκινά με “X-DSPAM-Confidence:” διασπάστε τη γραμμή για να εξαγάγετε τον αριθμό κινητής υποδιαστολής στη γραμμή. Μετρήστε αυτές τις γραμμές και στη συνέχεια υπολογίστε το σύνολο των τιμών “spam confidence” από αυτές τις γραμμές. Όταν φτάσετε στο τέλος του αρχείου, εκτυπώστε τη μέση τιμή των τιμών “spam confidence”.</strong></p>
<pre class="{text}"><code>Εισαγάγετε το όνομα του αρχείου: mbox.txt
Μέσο spam confidence: 0.894128046745

Εισαγάγετε το όνομα του αρχείου: mbox-short.txt
Μέσο spam confidence: 0.750718518519</code></pre>
<p><strong>Δοκιμάστε το αρχείο σας στα αρχεία <em>mbox.txt</em> και <em>mbox-short.txt</em>.</strong></p>
<p><strong>Άσκηση 3: Μερικές φορές, όταν οι προγραμματιστές βαριούνται ή θέλουν να διασκεδάσουν λίγο, προσθέτουν ένα αβλαβές <em>Πασχαλινό Αυγό (Easter Egg)</em> στο πρόγραμμά τους. Τροποποιήστε το πρόγραμμα που ζητά από τον χρήστη το όνομα του αρχείου, έτσι ώστε να εκτυπώνει ένα αστείο μήνυμα όταν ο χρήστης πληκτρολογεί το ακριβές όνομα αρχείου “na na boo boo”. Το πρόγραμμα θα πρέπει να συμπεριφέρεται κανονικά για όλα τα άλλα αρχεία που υπάρχουν και δεν υπάρχουν. Ακολουθεί ένα δείγμα εκτέλεσης του προγράμματος:</strong></p>
<pre class="{text}"><code>python egg.py
Enter the file name: mbox.txt
There were 1797 subject lines in mbox.txt

python egg.py
Εισαγάγετε το όνομα του αρχείου: missing.tyxt
Δεν είναι δυνατό το άνοιγμα του αρχείου: missing.tyxt

python egg.py
Εισαγάγετε το όνομα του αρχείου: na na boo boo
NA NA BOO BOO TO YOU - You have been punk&#39;d!</code></pre>
<p><strong>Δεν σας ενθαρρύνουμε να βάλετε τα “Easter Eggs” στα προγράμματά σας. Aυτό είναι απλώς μια άσκηση.</strong></p>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
