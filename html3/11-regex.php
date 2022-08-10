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

<h1 id="κανονικές-εκφράσεις-regular-expressions">Κανονικές εκφράσεις (Regular expressions)</h1>
<p>Μέχρι στιγμής διαβάζαμε αρχεία, αναζητούσαμε μοτίβα και εξαγάγαμε διάφορα κομμάτια γραμμών, που θεωρούσαμε ενδιαφέροντα. Χρησιμοποιήσαμε μεθόδους συμβολοσειρών, όπως <code>split</code> και <code>find</code> και χρησιμοποιούσαμε λίστες και διαμέριση συμβολοσειρών για να εξαγάγουμε τμήματα των γραμμών.</p>
<p>   </p>
<p>Αυτή η εργασία αναζήτησης και εξαγωγής είναι τόσο συνηθισμένη, που η Python έχει ένα πολύ ισχυρό άρθρωμα, που ονομάζεται <em>κανονικές εκφράσεις</em>, ή για συντομία <em>regex</em>, και χειρίζεται πολλές από αυτές τις εργασίες ιδιαίτερα έξυπνα. Ο λόγος που δεν έχουμε αναφερθεί στις κανονικές εκφράσεις νωρίτερα στο βιβλίο είναι επειδή, ενώ είναι πολύ ισχυρές, είναι λίγο περίπλοκες και η σύνταξή τους χρειάζεται μια κάποια εξοικείωση.</p>
<p>Οι κανονικές εκφράσεις είναι σχεδόν, από μόνες τους, μικρή γλώσσα προγραμματισμού για αναζήτηση και ανάλυση συμβολοσειρών. Στην πραγματικότητα, έχουν γραφτεί ολόκληρα βιβλία με θέμα τις κανονικές εκφράσεις. Σε αυτό το κεφάλαιο, θα καλύψουμε μόνο τα βασικά των κανονικών εκφράσεων. Για περισσότερες λεπτομέρειες σχετικά με τις κανονικές εκφράσεις, δείτε:</p>
<p><a href="https://en.wikipedia.org/wiki/Regular_expression" class="uri">https://en.wikipedia.org/wiki/Regular_expression</a></p>
<p><a href="https://docs.python.org/library/re.html" class="uri">https://docs.python.org/library/re.html</a></p>
<p>Το άρθρωμα κανονικών εκφράσεων <code>re</code> πρέπει να εισαχθεί στο πρόγραμμά σας για να μπορέσετε να τοη χρησιμοποιήσετε. Η απλούστερη χρήση του αρθρώματος κανονικών εκφράσεων είναι η συνάρτηση <code>search()</code>. Το παρακάτω πρόγραμμα δείχνει μια απλή χρήση της λειτουργίας αναζήτησης.</p>
<p></p>
<pre class="python"><code># Search for lines that contain &#39;From&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;From:&#39;, line):
        print(line)

# Code: http://www.gr.py4e.com/code3/re01.py</code></pre>
<p>Ανοίγουμε το αρχείο, με βρόχο διατρέχουμε κάθε γραμμή και χρησιμοποιούμε την κανονική έκφραση <code>search()</code> για να εκτυπώνουμε μόνο τις γραμμές που περιέχουν τη συμβολοσειρά “From:”. Αυτό το πρόγραμμα δεν χρησιμοποιεί την πραγματική ισχύ των κανονικών εκφράσεων, αφού θα μπορούσαμε να χρησιμοποιήσουμε εξίσου εύκολα το <code>line.find()</code> για να επιτύχουμε το ίδιο αποτέλεσμα.</p>
<p></p>
<p>Η ισχύς των κανονικών εκφράσεων αποκαλύπτεται όταν προσθέτουμε ειδικούς χαρακτήρες στη συμβολοσειρά αναζήτησης, που μας επιτρέπουν να ελέγχουμε με μεγαλύτερη ακρίβεια ποιες γραμμές ταιριάζουν με τη συμβολοσειρά. Η προσθήκη αυτών των ειδικών χαρακτήρων στην κανονική μας έκφραση μας επιτρέπει να κάνουμε πολύπλοκη αντιστοίχιση και εξαγωγή ενώ γράφουμε πολύ λίγο κώδικα.</p>
<p>Για παράδειγμα, ο χαρακτήρας περίφλεξης (^) χρησιμοποιείται σε κανονικές εκφράσεις για να ταιριάζει με την “αρχή” μιας γραμμής. Μπορούσαμε να αλλάξουμε το πρόγραμμά μας ώστε να εντοπίζει μόνο τις γραμμές στις οποίες το “From:” ήταν στην αρχή της γραμμής ως εξής:</p>
<pre class="python"><code># Search for lines that start with &#39;From&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^From:&#39;, line):
        print(line)

# Code: http://www.gr.py4e.com/code3/re02.py</code></pre>
<p>Με αυτόν τον τρόπο θα εντοπίσουμε μόνο γραμμές που <em>ξεκινούν με</em> τη συμβολοσειρά “From:”. Αυτό είναι ένα ακόμη πολύ απλό παράδειγμα, που θα μπορούσαμε να είχαμε κάνει, ισοδύναμα, με τη μέθοδο <code>startswith()</code>, από τη βιβλιοθήκη συμβολοσειρών. Αλλά χρησιμεύει για να εμπεδώσουμε το γεγονός ότι οι κανονικές εκφράσεις περιέχουν ειδικούς χαρακτήρες ενεργειών, που μας δίνουν περισσότερο έλεγχο ως προς το τι θα ταιριάζει με την κανονική έκφραση.</p>
<p></p>
<h2 id="ταίριασμα-χαρακτήρων-σε-κανονικές-εκφράσεις">Ταίριασμα χαρακτήρων σε κανονικές εκφράσεις</h2>
<p>Υπάρχει ένα πλήθος άλλων ειδικών χαρακτήρων, που μας επιτρέπουν να δημιουργήσουμε ακόμη πιο ισχυρές κανονικές εκφράσεις. Ο πιο συχνά χρησιμοποιούμενος ειδικός χαρακτήρας είναι η τελεία, που ταιριάζει με οποιονδήποτε χαρακτήρα.</p>
<p></p>
<p>Στο ακόλουθο παράδειγμα, η κανονική έκφραση <code>F..m:</code> θα ταιριάζει με οποιαδήποτε από τις συμβολοσειρές “From:”, “Fxxm:”, “F12m:” ή “F!<span class="citation" data-cites="m">@m</span>:” καθώς οι χαρακτήρες τελείας στην τυπική έκφραση ταιριάζουν με οποιονδήποτε χαρακτήρα.</p>
<pre class="python"><code># Search for lines that start with &#39;F&#39;, followed by
# 2 characters, followed by &#39;m:&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^F..m:&#39;, line):
        print(line)

# Code: http://www.gr.py4e.com/code3/re03.py</code></pre>
<p>Το σύμβολο της τελείας είναι ιδιαίτερα ισχυρό όταν συνδυάζεται με τη δυνατότητα να υποδεικνύει ότι ένας χαρακτήρας μπορεί να επαναληφθεί όσες φορές χρειαστεί, χρησιμοποιώντας τους χαρακτήρες <code>*</code> ή <code>+</code> στην κανονική σας έκφραση. Αυτοί οι ειδικοί χαρακτήρες σημαίνουν ότι αντί να ταιριάζουν με έναν χαρακτήρα στη συμβολοσειρά αναζήτησης, ταιριάζουν με κανέναν ή περισσότερους χαρακτήρες (στην περίπτωση του αστερίσκου) ή έναν ή περισσότερους χαρακτήρες (στην περίπτωση του συμβόλου συν).</p>
<p>Μπορούμε να περιορίσουμε περαιτέρω τις γραμμές που ταιριάζουν χρησιμοποιώντας έναν επαναλαμβανόμενο χαρακτήρα <em>μπαλαντέρ</em> όπως στο ακόλουθο παράδειγμα:</p>
<pre class="python"><code># Search for lines that start with From and have an at sign
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^From:.+@&#39;, line):
        print(line)

# Code: http://www.gr.py4e.com/code3/re04.py</code></pre>
<p>Η συμβολοσειρά αναζήτησης <code>^From:.+@</code> θα ταιριάξει με επιτυχία με τις γραμμές που ξεκινούν με “From:”, ακολουθούμενο από έναν ή περισσότερους χαρακτήρες (<code>.+</code>), ακολουθούμενων από ένα σύμβολο at. Άρα αυτό θα ταιριάξει με την ακόλουθη γραμμή:</p>
<pre class="{text}"><code>From: stephen.marquard@uct.ac.za</code></pre>
<p>Μπορούμε να πούμε ότι ο χαρακτήρας μπαλαντέρ <code>.+</code> επεκτείνεται για να ταιριάζει με όλους τους χαρακτήρες μεταξύ του χαρακτήρα άνω και κάτω τελείας και του συμβόλου at.</p>
<pre class="{text}"><code>From:.+@</code></pre>
<p>Είναι καλό να σκεφτόμαστε τους χαρακτήρες συν και αστερίσκο ως “άπληστους”. Για παράδειγμα, η ακόλουθη συμβολοσειρά θα ταιριάζει με το τελευταίο στο σύμβολο at της συμβολοσειράς καθώς το <code>.+</code> ωθεί προς τα έξω, όπως φαίνεται παρακάτω:</p>
<pre class="{text}"><code>From: stephen.marquard@uct.ac.za, csev@umich.edu, and cwen @iupui.edu</code></pre>
<p>Είναι δυνατόν να πείτε σε έναν αστερίσκο ή ένα σύμβολο συν να μην είναι τόσο “άπληστο” προσθέτοντας έναν επιπλέον χαρακτήρα. Δείτε τη λεπτομερή τεκμηρίωση για πληροφορίες σχετικά με την απενεργοποίηση της άπληστης συμπεριφοράς.</p>
<p></p>
<h2 id="εξαγωγή-δεδομένων-με-χρήση-κανονικών-εκφράσεων">Εξαγωγή δεδομένων με χρήση κανονικών εκφράσεων</h2>
<p>Εάν θέλουμε να εξαγάγουμε δεδομένα από μια συμβολοσειρά στην Python, μπορούμε να χρησιμοποιήσουμε τη μέθοδο <code>findall()</code>, για να εξαγάγουμε όλες τις υποσυμβολοσειρές που ταιριάζουν με μια κανονική έκφραση. Ας χρησιμοποιήσουμε ως παράδειγμα το να εξαγάγουμε οτιδήποτε μοιάζει με διεύθυνση email, από οποιαδήποτε γραμμή, ανεξαρτήτως μορφής. Για παράδειγμα, θέλουμε να τραβήξουμε τις διευθύνσεις email από καθεμία από τις ακόλουθες γραμμές:</p>
<pre class="{text}"><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
Return-Path: &lt;postmaster@collab.sakaiproject.org&gt;
          for &lt;source@collab.sakaiproject.org&gt;;
Received: (from apache@localhost)
Author: stephen.marquard@uct.ac.za</code></pre>
<p>Δεν θέλουμε να γράψουμε κώδικα για κάθε έναν από τους τύπους γραμμών, χωρίζοντας και τεμαχίζοντας διαφορετικά για κάθε γραμμή. Το πρόγραμμα που ακολουθεί χρησιμοποιεί το <code>findall()</code> για να βρει τις γραμμές με διευθύνσεις email και να εξαγάγει μία ή περισσότερες διευθύνσεις από καθεμία από αυτές τις γραμμές.</p>
<p> </p>
<pre class="python"><code>import re
s = &#39;A message from csev@umich.edu to cwen@iupui.edu about meeting @2PM&#39;
lst = re.findall(&#39;\S+@\S+&#39;, s)
print(lst)

# Code: http://www.gr.py4e.com/code3/re05.py</code></pre>
<p>Η μέθοδος <code>findall()</code> αναζητά τη συμβολοσειρά στο δεύτερο όρισμα και επιστρέφει μια λίστα με όλες τις συμβολοσειρές που μοιάζουν με διευθύνσεις email. Χρησιμοποιούμε μια ακολουθία δύο χαρακτήρων που ταιριάζει με έναν μη λευκό χαρακτήρα (<code>\S</code>).</p>
<p>Η έξοδος του προγράμματος θα είναι:</p>
<pre class="{text}"><code>[&#39;csev@umich.edu&#39;, &#39;cwen@iupui.edu&#39;]</code></pre>
<p>Μεταφράζοντας της κανονικής έκφρασης, λέμε, αναζητούμε υποσυμβολοσειρές που έχουν τουλάχιστον έναν μη λευκό χαρακτήρα, ακολουθούμενο από ένα σύμβολο at, ακολουθούμενο από τουλάχιστον έναν ακόμη μη λευκό χαρακτήρα. Το <code>\S+</code> ταιριάζει με όσο το δυνατόν περισσότερους μη κενούς χαρακτήρες.</p>
<p>Η κανονική έκφραση θα ταιριάξει δύο φορές (csev@umich.edu και cwen@iupui.edu), αλλά δεν θα ταιριάξει με τη συμβολοσειρά “<span class="citation" data-cites="2PM">@2PM</span>” επειδή δεν υπάρχουν μη κενοί χαρακτήρες <em>πριν</em> από το σύμβολο at. Μπορούμε να χρησιμοποιήσουμε αυτήν την κανονική έκφραση σε ένα πρόγραμμα για να διαβάσουμε όλες τις γραμμές ενός αρχείου και να εκτυπώσουμε οτιδήποτε μοιάζει με διεύθυνση email ως εξής:</p>
<pre class="python"><code># Search for lines that have an at sign between characters
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;\S+@\S+&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: http://www.gr.py4e.com/code3/re06.py</code></pre>
<p>Διαβάζουμε κάθε γραμμή και μετά εξάγουμε όλες τις υποσυμβολοσειρές που ταιριάζουν με την κανονική μας έκφραση. Μιας και το <code>findall()</code> επιστρέφει μια λίστα, απλώς ελέγχουμε εάν ο αριθμός των στοιχείων στη λίστα που επιστρέφεται είναι μεγαλύτερος από το μηδέν για να εκτυπώσουμε μόνο γραμμές όπου βρήκαμε τουλάχιστον μία υποσυμβολοσειρά που μοιάζει με διεύθυνση email.</p>
<p>Αν τρέξουμε το πρόγραμμα στο <em>mbox-short.txt</em> θα έχουμε την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>...
[&#39;&lt;source@collab.sakaiproject.org&gt;;&#39;]
[&#39;&lt;source@collab.sakaiproject.org&gt;;&#39;]
[&#39;apache@localhost)&#39;]
[&#39;source@collab.sakaiproject.org;&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;wagnermr@iupui.edu&#39;]</code></pre>
<p>Ορισμένες από τις διευθύνσεις ηλεκτρονικού ταχυδρομείου μας έχουν λανθασμένους χαρακτήρες, όπως “&lt;” ή “;” στην αρχή ή στο τέλος. Ας δηλώσουμε ότι μας ενδιαφέρει μόνο το τμήμα της συμβολοσειράς που αρχίζει και τελειώνει με ένα γράμμα ή έναν αριθμό.</p>
<p>Για να το κάνουμε αυτό, χρησιμοποιούμε ένα άλλο χαρακτήρα των κανονικών εκφράσεων. Οι αγκύλες χρησιμοποιούνται για να υποδείξουν ένα σύνολο πολλών αποδεκτών χαρακτήρων. Κατά μία έννοια, το <code>\S</code> ζητά να ταιριάζει με το σύνολο των “μη λευκών χαρακτήρων”. Τώρα θα είμαστε λίγο πιο σαφείς ως προς τους χαρακτήρες που θα ταιριάξουμε.</p>
<p>Εδώ είναι η νέα μας κανονική έκφραση:</p>
<pre class="{text}"><code>[a-zA-Z0-9]\S*@\S*[a-zA-Z]</code></pre>
<p>Αυτό γίνεται λίγο περίπλοκο και μπορείτε να αρχίσετε να βλέπετε γιατί είπαμε ότι οι κανονικές εκφράσεις αποτελούν μια ξεχωριστή, μικρή γλώσσα. Μεταφράζοντας αυτήν την κανονική έκφραση, αναζητούμε υποσυμβολοσειρές που ξεκινούν με ένα <em>μόνο</em> πεζό γράμμα, κεφαλαίο γράμμα ή αριθμό “[a-zA-Z0-9]”, ακολουθούμενο από κανέναν ή περισσότερους μη λευκούς χαρακτήρες (<code>\S *</code>), ακολουθούμενων από ένα σύμβολο at, ακολουθούμενο από κανέναν ή περισσότερους μη λευκούς χαρακτήρες (<code>\S*</code>), ακολουθούμενων από ένα κεφαλαίο ή πεζό γράμμα. Σημειώστε ότι αλλάξαμε από <code>+</code> σε <code>*</code> για να υποδείξουμε κανέναν ή περισσότερους μη λευκούς χαρακτήρες, καθώς το <code>[a-zA-Z0-9]</code> είναι ήδη ένας μη κενός χαρακτήρας. Θυμηθείτε ότι το <code>*</code> ή <code>+</code> ισχύει για τον μεμονωμένο χαρακτήρα που βρίσκεται ακριβώς στα αριστερά του συν ή του αστερίσκου.</p>
<p></p>
<p>Εάν χρησιμοποιήσουμε αυτήν την έκφραση στο πρόγραμμά μας, τα δεδομένα που προκύπτουν είναι πολύ πιο καθαρά:</p>
<pre class="python"><code># Search for lines that have an at sign between characters
# The characters must be a letter or number
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;[a-zA-Z0-9]\S*@\S*[a-zA-Z]&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: http://www.gr.py4e.com/code3/re07.py</code></pre>
<pre class="{text}"><code>...
[&#39;wagnermr@iupui.edu&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;postmaster@collab.sakaiproject.org&#39;]
[&#39;200801032122.m03LMFo4005148@nakamura.uits.iupui.edu&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;apache@localhost&#39;]</code></pre>
<p>Παρατηρήστε ότι στις γραμμές <code>source@collab.sakaiproject.org</code>, η κανονική μας έκφραση απάλειψε δύο γράμματα στο τέλος της συμβολοσειράς (“&gt;;”). Αυτό συνέβει επειδή προσθέτοντας το <code>[a-zA-Z]</code> στο τέλος της κανονικής μας έκφρασης, απαιτούμε ότι οποιαδήποτε συμβολοσειρά βρίσκει ο αναλυτής κανονικής έκφρασης πρέπει να τελειώνει με ένα γράμμα. Έτσι, όταν βλέπει το “&gt;” στο τέλος του “sakaiproject.org&gt;;” απλά σταματά στο τελευταίο “ταιριαστό” γράμμα που βρήκε (δηλαδή, το “g” ήταν το τελευταίο καλό ταίριασμα).</p>
<p>Σημειώστε επίσης ότι η έξοδος του προγράμματος είναι μια λίστα Python που έχει μια συμβολοσειρά ως μοναδικό στοιχείο στη λίστα.</p>
<h2 id="συνδυασμός-αναζήτησης-και-εξαγωγής">Συνδυασμός αναζήτησης και εξαγωγής</h2>
<p>Αν θέλουμε να βρούμε αριθμούς σε γραμμές που ξεκινούν με τη συμβολοσειρά “X-”, όπως:</p>
<pre class="{text}"><code>X-DSPAM-Confidence: 0.8475
X-DSPAM-Probability: 0.0000</code></pre>
<p>δεν θέλουμε απλώς αριθμούς κινητής υποδιαστολής από οποιαδήποτε γραμμή. Θέλουμε να εξαγάγουμε αριθμούς μόνο από γραμμές που έχουν την παραπάνω σύνταξη.</p>
<p>Μπορούμε να κατασκευάσουμε την ακόλουθη κανονική έκφραση για να επιλέξουμε τις γραμμές:</p>
<pre class="{text}"><code>^X-.*: [0-9.]+</code></pre>
<p>Μεταφράζοντάς το, λέμε, θέλουμε γραμμές που ξεκινούν με <code>X-</code>, ακολουθούμενο από κανέναν ή περισσότερους χαρακτήρες (<code>.*</code>), ακολουθούμενων από άνω και κάτω τελεία (<code>:</code>) και μετά ένα κενό. Μετά το κενό αναζητούμε έναν ή περισσότερους χαρακτήρες που είναι είτε ψηφίο (0-9) είτε τελεία <code>[0-9.]+</code>. Σημειώστε ότι μέσα στις αγκύλες, η τελεία ταιριάζει με μια πραγματική τελεία (δηλαδή, δεν είναι χαρακτήρας μπαλαντέρ μεταξύ των αγκύλων).</p>
<p>Αυτή είναι μια πολύ αυστηρή έκφραση, που θα ταιριάξει μόνο με τις γραμμές που μας ενδιαφέρουν, ως εξής:</p>
<pre class="python"><code># Αναζητάμε τις γραμμές που ξεκινούν με `X`,
# ακολουθούμενο από μη λευκούς χαρακτήρες,
# &quot;:&quot;, ακολουθούμενο από ένα κενό και
# οποιονδήποτε αριθμό.
# Ο αριθμός μπορεί να περιλαμβάνει υποδιαστολή.

import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^X\S*: [0-9.]+&#39;, line):
        print(line)

# Code: http://www.gr.py4e.com/code3/re10.py</code></pre>
<p>Όταν εκτελούμε το πρόγραμμα, βλέπουμε τα δεδομένα, όμορφα φιλτραρισμένα, για να εμφανιστούν μόνο τις γραμμές που αναζητούμε.</p>
<pre class="{text}"><code>X-DSPAM-Confidence: 0.8475
X-DSPAM-Probability: 0.0000
X-DSPAM-Confidence: 0.6178
X-DSPAM-Probability: 0.0000
...</code></pre>
<p>Αλλά τώρα πρέπει να λύσουμε άλλο ένα πρόβλημα, της εξαγωγής των αριθμών. Αν και θα ήταν αρκετά απλό να χρησιμοποιήσουμε το <code>split</code>, μπορούμε να χρησιμοποιήσουμε μια άλλη δυνατότητα κανονικών εκφράσεων, για αναζήτηση και ανάλυση της γραμμής, ταυτόχρονα.</p>
<p></p>
<p>Οι παρενθέσεις είναι άλλος ένας ειδικός χαρακτήρας των κανονικών εκφράσεων. Όταν προσθέτετε παρενθέσεις σε μια κανονική έκφραση, αυτές αγνοούνται όταν ταιριάζουν με τη συμβολοσειρά. Αλλά όταν χρησιμοποιείτε <code>findall()</code>, οι παρενθέσεις υποδεικνύουν ότι, ενώ θέλετε να ταιριάζει ολόκληρη η έκφραση, σας ενδιαφέρει να εξαγάγετε μόνο το τμήμα της υποσυμβολοσειράς, που ταιριάζει με την κανονική έκφραση που περιέχεται στις παρενθέσεις.</p>
<p> </p>
<p>Κάνουμε λοιπόν την εξής αλλαγή στο πρόγραμμά μας:</p>
<pre class="python"><code># Αναζητάμε τις γραμμές που ξεκινούν με `X`,
# ακολουθούμενο από μη λευκούς χαρακτήρες,
# &quot;:&quot;, ακολουθούμενο από ένα κενό και
# οποιονδήποτε αριθμό.
# Ο αριθμός μπορεί να περιλαμβάνει υποδιαστολή.

import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;^X\S*: ([0-9.]+)&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: http://www.gr.py4e.com/code3/re11.py</code></pre>
<p>Αντί να καλέσουμε τη <code>search()</code>, προσθέτουμε παρενθέσεις γύρω από το τμήμα της κανονικής έκφρασης που αντιπροσωπεύει τον αριθμό κινητής υποδιαστολής, για να υποδείξουμε ότι θέλουμε το <code>findall()</code> να μας δώσει πίσω μόνο το τμήμα αριθμού κινητής υποδιαστολής, της συμβολοσειράς, που ταιριάζει .</p>
<p>Η έξοδος από αυτό το πρόγραμμα είναι η εξής:</p>
<pre class="{text}"><code>[&#39;0.8475&#39;]
[&#39;0.0000&#39;]
[&#39;0.6178&#39;]
[&#39;0.0000&#39;]
[&#39;0.6961&#39;]
[&#39;0.0000&#39;]
...</code></pre>
<p>Οι αριθμοί εξακολουθούν να βρίσκονται σε μια λίστα και να πρέπει να μετατραπούν από συμβολοσειρές σε κινητή υποδιαστολή, αλλά χρησιμοποιήσαμε τη δύναμη των κανονικών εκφράσεων για αναζήτηση και εξαγωγή των πληροφοριών που θωρούμε ενδιαφέρουσες.</p>
<p>Ως ένα άλλο παράδειγμα αυτής της τεχνικής, αν κοιτάξετε το αρχείο, υπάρχει ένας αριθμός γραμμών της μορφής:</p>
<pre class="{text}"><code>Details: http://source.sakaiproject.org/viewsvn/?view=rev&amp;rev=39772</code></pre>
<p>Εάν θέλαμε να εξαγάγουμε όλους τους αριθμούς αναθεώρησης (τον ακέραιο αριθμό στο τέλος αυτών των γραμμών) χρησιμοποιώντας την ίδια τεχνική όπως παραπάνω, θα μπορούσαμε να γράψουμε το ακόλουθο πρόγραμμα:</p>
<pre class="python"><code># Αναζητάμε τις γραμμές που ξεκινούν με &#39;Details: rev=&#39;
# ακολουθούμενο από ψηφία.
# Στη συνέχεια εκτυπώνουμε τον αριθμό, αν βρεθεί.
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;^Details:.*rev=([0-9]+)&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: http://www.gr.py4e.com/code3/re12.py</code></pre>
<p>Μεταφράζοντας την κανονική μας έκφραση, αναζητούμε γραμμές που ξεκινούν με <code>Details:</code>, ακολουθούμενο από οποιονδήποτε αριθμό χαρακτήρων (<code>.*</code>), ακολουθούμενων από <code>rev=</code> και μετά από ένα ή περισσότερα ψηφία. Θέλουμε να βρούμε γραμμές που ταιριάζουν με ολόκληρη την έκφραση, αλλά θέλουμε να εξαγάγουμε μόνο τον ακέραιο αριθμό στο τέλος της γραμμής, επομένως περιβάλλουμε το <code>[0-9]+</code> με παρενθέσεις.</p>
<p>Όταν εκτελούμε το πρόγραμμα, έχουμε την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>[&#39;39772&#39;]
[&#39;39771&#39;]
[&#39;39770&#39;]
[&#39;39769&#39;]
...</code></pre>
<p>Θυμηθείτε ότι το <code>[0-9]+</code> είναι “άπληστο” και προσπαθεί να δημιουργήσει όσο το δυνατόν μεγαλύτερη σειρά ψηφίων πριν εξαγάγει αυτά τα ψηφία. Αυτή η “άπληστη” συμπεριφορά είναι ο λόγος που παίρνουμε και τα πέντε ψηφία για κάθε αριθμό. Η μονάδα κανονικής έκφρασης επεκτείνεται και προς τις δύο κατευθύνσεις μέχρι να συναντήσει ένα μη ψηφίο ή την αρχή ή το τέλος μιας γραμμής.</p>
<p>Τώρα μπορούμε να χρησιμοποιήσουμε κανονικές εκφράσεις για να επαναλάβουμε μια άσκηση από προηγούμενη ενότητα του βιβλίου, όπου μας ενδιέφερε η ώρα της ημέρας κάθε μηνύματος αλληλογραφίας. Αναζητούσαμε γραμμές της μορφής:</p>
<pre class="{text}"><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008</code></pre>
<p>και θέλαμε να εξαγάγουμε την ώρα της ημέρας από αυτές τις γραμμές. Προηγουμένως το υλοποιήσαμς με δύο κλήσεις του <code>split</code>. Πρώτα η γραμμή χωρίστηκε σε λέξεις και μετά βγάλαμε την πέμπτη λέξη και τη χωρίσαμε ξανά στον χαρακτήρα άνω και κάτω τελείας, για να βγάλουμε τους δύο χαρακτήρες που μας ενδιέφεραν.</p>
<p>Ενώ αυτό λειτούργησε, στην πραγματικότητα οδηγεί σε αρκετά εύθραυστο κώδικα που υποθέτει ότι οι γραμμές είναι σωστά διαμορφωμένες. Εάν επρόκειτο να προσθέσετε έλεγχο σφαλμάτων (ή ένα μεγάλο μπλοκ try/except), για να διασφαλίσετε ότι το πρόγραμμά σας δεν αποτυγχάνει όταν αντιμετωπίσει εσφαλμένα μορφοποιημένες γραμμές, ο κώδικας θα μεταφερόταν σε 10-15 γραμμές κώδικα, που θα ήταν αρκετά δύσκολο να διαβαστούν.</p>
<p>Μπορούμε να το κάνουμε αυτό με πολύ πιο απλό τρόπο, με την ακόλουθη κανονική έκφραση:</p>
<pre class="{text}"><code>^From .* [0-9][0-9]:</code></pre>
<p>Η μετάφραση αυτής της κανονικής έκφρασης είναι ότι αναζητούμε γραμμές που ξεκινούν με <code>From</code> (προσέξτε το κενό διάστημα), ακολουθούμενο από οποιονδήποτε αριθμό χαρακτήρων (<code>.*</code>), ακολουθούμενων από ένα κενό, ακολουθούμενο από δύο ψηφία <code>[0 -9][0-9]</code>, ακολουθούμενα από χαρακτήρα άνω και κάτω τελείας. Αυτός είναι ο ορισμός των ειδών γραμμών που αναζητούμε.</p>
<p>Για να εξάγουμε μόνο την ώρα χρησιμοποιώντας το <code>findall()</code>, προσθέτουμε παρενθέσεις γύρω από τα δύο ψηφία ως εξής:</p>
<pre class="{text}"><code>^From .* ([0-9][0-9]):</code></pre>
<p>Αυτό έχει ως αποτέλεσμα το ακόλουθο πρόγραμμα:</p>
<pre class="python"><code># Αναζητάμε τις γραμμές που ξεκινούν με &#39;From &#39; και ένα σύνολο χαρακτήρων
# ακολουθούμενων από δύο ψηφία, ακολουθούμενα από &#39;:&#39;
# Στη συνέχεια εκτυπώνουμε τα ψηφία, εάν βρεθούν
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;^From .* ([0-9][0-9]):&#39;, line)
    if len(x) &gt; 0: print(x)

# Code: http://www.gr.py4e.com/code3/re13.py</code></pre>
<p>Όταν το πρόγραμμα εκτελείται, παράγει την ακόλουθη έξοδο:</p>
<pre class="{text}"><code>[&#39;09&#39;]
[&#39;18&#39;]
[&#39;16&#39;]
[&#39;15&#39;]
...</code></pre>
<h2 id="χαρακτήρας-διαφυγής">Χαρακτήρας διαφυγής</h2>
<p>Όταν χρησιμοποιούμε ειδικούς χαρακτήρες σε κανονικές εκφράσεις, όχι ως σύμβολα αλλά με την πραγματική τους αξία, για να ταιριάξουμε την αρχή ή το τέλος μιας γραμμής ή να καθορίσουμε μπαλαντέρ, χρειαζόμαστε έναν τρόπο για να υποδείξουμε ότι αυτοί οι χαρακτήρες είναι “κανονικοί” και θέλουμε να ταιριάξουμε τον πραγματικό χαρακτήρα, όπως ένα σύμβολο του δολαρίου ή έναν χαρακτήρα περίφλεξης (^) .</p>
<p>Μπορούμε να υποδείξουμε πως θέλουμε απλώς να ταιριάξουμε έναν χαρακτήρα προσθέτοντας ως πρόθεμα αυτού του χαρακτήρα μια ανάστροφη κάθετο. Για παράδειγμα, μπορούμε να βρούμε χρηματικά ποσά με την ακόλουθη κανονική έκφραση.</p>
<pre class="python"><code>import re
x = &#39;We just received $10.00 for cookies.&#39;
y = re.findall(&#39;\$[0-9.]+&#39;,x)</code></pre>
<p>Εφόσον δίνουμε το πρόθεμα της ανάστροφης κάθετου πριν το σύμβολο του δολαρίου, η κανονική έκφραση το ταιριάζει με το σύμβολο του δολαρίου, στη συμβολοσειρά εισόδου, αντί να το ταιριάξει με το “τέλος γραμμής” και η υπόλοιπη τυπική έκφραση ταιριάζει με ένα ή περισσότερα ψηφία ή τον χαρακτήρα τελείας.</p>
<p><em>Σημείωση:</em> Μέσα στις αγκύλες, οι χαρακτήρες δεν είναι “ειδικοί”. Έτσι, όταν λέμε <code>[0-9.]</code>, σημαίνει πραγματικά ψηφία ή τελεία. Έξω από αγκύλες, η τελεία είναι ο χαρακτήρας “μπαλαντέρ” και ταιριάζει με οποιονδήποτε χαρακτήρα. Μέσα σε αγκύλες, η τελεία είναι τελεία.</p>
<h2 id="περίληψη">Περίληψη</h2>
<p>Αν και αυτά που αναφέραμε αγκίζουν μόνο την επιφάνεια της ένοιας των κανονικών εκφράσεων, μάθαμε λίγα πράγματα για τη γλώσσα των κανονικών εκφράσεων. Είναι συμβολοσειρές αναζήτησης με ειδικούς χαρακτήρες μέσα τους που μεταφέρουν τις επιθυμίες σας στο σύστημα κανονικής έκφρασης, ως προς το τι πρέπει να “ταιριάξει” και τι να εξάγεται από τις αντιστοιχισμένες συμβολοσειρές. Ακολουθούν μερικοί από αυτούς τους ειδικούς χαρακτήρες και τις ακολουθίες χαρακτήρων:</p>
<p><code>^</code> Ταιριάζει την αρχή μιας γραμμής.</p>
<p><code>$</code> Ταιριάζει το τέλος μιας γραμμής</p>
<p><code>.</code> Ταιριάζει οποιονδήποτε χαρακτήρα (ένα μπαλαντέρ).</p>
<p><code>\s</code> Ταιριάζει ένα λευκό χαρακτήρα (μη ορατό χαρακτήρα).</p>
<p><code>\S</code> Ταιριάζει ένα μη λευκό χαρακτήρα (ορατό χαρακτήρα) (αντίθετο του \s).</p>
<p><code>*</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες καμία ή περισσότερες φορές.</p>
<p><code>*?</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες καμία ή περισσότερες φορές “μη-άπληστα”.</p>
<p><code>+</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες μία ή περισσότερες φορές.</p>
<p><code>+?</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες μία ή περισσότερες φορές “μη-άπληστα”.</p>
<p><code>?</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες καμία ή μία φορά.</p>
<p><code>??</code> Επαναλαμβάνει τον/τους αμέσως προηγούμενο/ους χαρακτήρα/ες καμία ή μία φορά “μη-άπληστα”.</p>
<p><code>[aeiou]</code> Ταιριάζει έναν μόνο χαρακτήρα από το δοθέν σύνολο. Στο παράδειγμα, θα ταιριάξει κάποιο από τα “a”, “e”, “i”, “o” ή “u”, αλλά όχι κάποιον άλλο χαρακτήρα.</p>
<p><code>[a-z0-9]</code> Μπορείτε να καθορίσετε εύρος χαρακτήρων χρησιμοποιώντας το σύμβολο μείον. Αυτό το παράδειγμα αντιπροσωπεύει έναν μεμονωμένο χαρακτήρα, που πρέπει να είναι πεζός ή ψηφίο.</p>
<p><code>[^A-Za-z]</code> Όταν ο πρώτος χαρακτήρας του συνόλου είναι η περίφλεξη, αντιστρέφει τη λογική. Αυτό το παράδειγμα ταιριάζει με έναν μεμονωμένο χαρακτήρα που είναι οτιδήποτε <em>εκτός</em> από ένα κεφαλαίο ή πεζό γράμμα.</p>
<p><code>( )</code> Όταν προστίθενται παρενθέσεις σε μια κανονική έκφραση, αγνοούνται από την αντιστοίχιση, αλλά σας επιτρέπουν, όταν χρησιμοποιείτε το <code>findall()</code>, να εξαγάγετε ένα συγκεκριμένο υποσύνολο της αντιστοιχισμένης συμβολοσειράς αντί ολόκληρης της συμβολοσειράς .</p>
<p><code>\b</code> Ταιριάζει με την κενή συμβολοσειρά, αλλά μόνο στην αρχή ή στο τέλος μιας λέξης.</p>
<p><code>\B</code> Ταιριάζει με την κενή συμβολοσειρά, αλλά όχι στην αρχή ή στο τέλος μιας λέξης.</p>
<p><code>\d</code> Ταιριάζει με οποιοδήποτε δεκαδικό ψηφίο. Ισοδύναμο με το σύνολο [0-9].</p>
<p><code>\D</code> Ταιριάζει με οποιονδήποτε χαρακτήρα, μη-ψήφιο. Ισοδύναμο με το σύνολο [^0-9].</p>
<h2 id="μπόνους-ενότητα-για-χρήστες-unix-linux">Μπόνους ενότητα για χρήστες Unix / Linux</h2>
<p>Η υποστήριξη για αναζήτηση αρχείων με χρήση κανονικών εκφράσεων ενσωματώθηκε στο λειτουργικό σύστημα Unix από τη δεκαετία του 1960 και είναι διαθέσιμη σε όλες σχεδόν τις γλώσσες προγραμματισμού με τη μία ή την άλλη μορφή.</p>
<p></p>
<p>Στην πραγματικότητα, υπάρχει ένα πρόγραμμα γραμμής εντολών, ενσωματωμένο στο Unix που ονομάζεται <em>grep</em> (Generalized Regular Expression Parser) που κάνει σχεδόν ότι και τα παραδείγματα με τη <code>search()</code> σε αυτό το κεφάλαιο. Επομένως, εάν έχετε σύστημα Macintosh ή Linux, μπορείτε να δοκιμάσετε τις ακόλουθες εντολές στο παράθυρο της γραμμής εντολών σας.</p>
<pre class="bash"><code>$ grep &#39;^From:&#39; mbox-short.txt
From: stephen.marquard@uct.ac.za
From: louis@media.berkeley.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu</code></pre>
<p>Αυτό λέει στο <code>grep</code> να σας δείξει τις γραμμές που ξεκινούν με τη συμβολοσειρά “From:” στο αρχείο <em>mbox-short.txt</em>. Εάν πειραματιστείτε λίγο με την εντολή <code>grep</code> και διαβάσετε την τεκμηρίωση για το <code>grep</code>, θα βρείτε κάποιες ανεπαίσθητες διαφορές μεταξύ της υποστήριξης κανονικών εκφράσεων στην Python και της υποστήριξης κανονικών εκφράσεων στο <code>grep</code>. Για παράδειγμα, το <code>grep</code> δεν υποστηρίζει τον μη λευκό χαρακτήρα <code>\S</code>, επομένως θα χρειαστεί να χρησιμοποιήσετε τον ελαφρώς πιο περίπλοκο συμβολισμό συνόλου <code>[^[:space:]]</code>, που σημαίνει απλώς αντιστοίχιση ενός μη λευκού χαρακτήρα.</p>
<h2 id="εκσφαλμάτωση">Εκσφαλμάτωση</h2>
<p>Η Python έχει κάποια απλή και στοιχειώδη ενσωματωμένη τεκμηρίωση που μπορεί να είναι αρκετά χρήσιμη εάν χρειάζεστε ένα γρήγορο φρασκάρισμα της μνήμης σας, σχετικά με το ακριβές όνομα μιας συγκεκριμένης μεθόδου. Αυτή η τεκμηρίωση μπορεί να προβληθεί στον διερμηνέα Python σε διαδραστική λειτουργία.</p>
<p>Μπορείτε να εμφανίσετε ένα διαδραστικό σύστημα βοήθειας χρησιμοποιώντας το <code>help()</code>.</p>
<pre class="python"><code>&gt;&gt;&gt; help()

help&gt; modules</code></pre>
<p>Εάν γνωρίζετε ποιο άρθρωμα θέλετε να χρησιμοποιήσετε, μπορείτε να χρησιμοποιήσετε την εντολή <code>dir()</code> για να βρείτε τις μεθόδους στη λειτουργική μονάδα ως εξής:</p>
<pre class="python trinket"><code>&gt;&gt;&gt; import re
&gt;&gt;&gt; dir(re)
[.. &#39;compile&#39;, &#39;copy_reg&#39;, &#39;error&#39;, &#39;escape&#39;, &#39;findall&#39;,
&#39;finditer&#39;, &#39;match&#39;, &#39;purge&#39;, &#39;search&#39;, &#39;split&#39;, &#39;sre_compile&#39;,
&#39;sre_parse&#39;, &#39;sub&#39;, &#39;subn&#39;, &#39;sys&#39;, &#39;template&#39;]</code></pre>
<p>Μπορείτε επίσης να λάβετε μια μικρή τεκμηρίωσης για μια συγκεκριμένη μέθοδο χρησιμοποιώντας την εντολή dir.</p>
<pre class="python trinket"><code>&gt;&gt;&gt; help (re.search)
Help on function search in module re:

search(pattern, string, flags=0)
    Scan through string looking for a match to the pattern, returning
    a match object, or None if no match was found.
&gt;&gt;&gt;</code></pre>
<p>Η ενσωματωμένη τεκμηρίωση δεν είναι ιδιαίτερα εκτενής, αλλά μπορεί να είναι χρήσιμη όταν βιάζεστε ή δεν έχετε πρόσβαση σε πρόγραμμα περιήγησης ιστού ή μηχανή αναζήτησης.</p>
<h2 id="γλωσσάριο">Γλωσσάριο</h2>
<dl>
<dt>brittle code - εύθραυστος κώδικας</dt>
<dd>Κωδικός που λειτουργεί όταν τα δεδομένα εισόδου είναι σε συγκεκριμένη μορφή, αλλά είναι επιρρεπής σε σφάλματα εκτέλεσης, εάν υπάρχει κάποια απόκλιση από τη σωστή μορφή. Αυτό το ονομάζουμε “εύθραυστος κώδικας” γιατί “σπάει” εύκολα.
</dd>
<dt>grep</dt>
<dd>Μια εντολή διαθέσιμη στα περισσότερα συστήματα Unix, που αναζητά μέσα σε αρχεία κειμένου γραμμές, που ταιριάζουν με κανονικές εκφράσεις. Το όνομα της εντολής σημαίνει “Generalized Regular Expression Parser - Αναλυτής Γενικοποιημένης Κανονική Έκφραση”.
</dd>
<dt>άπληστο ταίριασμα</dt>
<dd>Η έννοια ότι οι χαρακτήρες <code>+</code> και <code>*</code> σε μια κανονική έκφραση επεκτείνονται προς τα έξω για να ταιριάζουν με τη μεγαλύτερη δυνατή συμβολοσειρά.
</dd>
<dt>κανονική έκφραση - regular expression</dt>
<dd>Μια γλώσσα για την έκφραση πιο σύνθετων συμβολοσειρών αναζήτησης. Μια κανονική έκφραση μπορεί να περιέχει ειδικούς χαρακτήρες, που υποδεικνύουν ότι μια αναζήτηση ταιριάζει μόνο στην αρχή ή στο τέλος μιας γραμμής ή πολλές άλλες παρόμοιες δυνατότητες.
</dd>
<dt>μπαλαντέρ - wild card</dt>
<dd>Ένας ειδικός χαρακτήρας, που ταιριάζει με κάθε χαρακτήρα. Στις κανονικές εκφράσεις ο χαρακτήρας μπαλαντέρ είναι η τελεία.
</dd>
</dl>
<h2 id="ασκήσεις">Ασκήσεις</h2>
<p><strong>Άσκηση 1: Γράψτε ένα απλό πρόγραμμα για την προσομοίωση της λειτουργίας της εντολής <code>grep</code> στο Unix. Ζητήστε από τον χρήστη να εισαγάγει μια κανονική έκφραση και μετρήστε τον αριθμό των γραμμών του αρχείου mbox.txt, που ταιριάζουν με την κανονική έκφραση:</strong></p>
<pre class="{text}"><code>$ python grep.py
Εισαγάγετε μια κανονική έκφραση: ^Author
mbox.txt had 1798 lines that matched ^Author

$ python grep.py
Εισαγάγετε μια κανονική έκφραση: ^X-
mbox.txt had 14368 lines that matched ^X-

$ python grep.py
Εισαγάγετε μια κανονική έκφραση: java$
mbox.txt had 4175 lines that matched java$</code></pre>
<p><strong>Άσκηση 2: Γράψτε ένα πρόγραμμα για να αναζητήσετε γραμμές της μορφής:</strong></p>
<pre class="{text}"><code>New Revision: 39772</code></pre>
<p>** Εξάγετε τον αριθμό, από κάθε γραμμή, χρησιμοποιώντας μια κανονική έκφραση και τη μέθοδο <code>findall()</code>. Υπολογίστε τον μέσο όρο των αριθμών και εκτυπώστε τον μέσο όρο ως ακέραιο.**</p>
<pre class="{text}"><code>Εισαγάγετε το αρχείο:mbox.txt
38549

Εισαγάγετε το αρχείο:mbox-short.txt
39756</code></pre>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
