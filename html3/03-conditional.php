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
<h1 id="δομή-επιλογής">Δομή Επιλογής</h1>
<h2 id="λογικές-εκφράσεις">Λογικές εκφράσεις</h2>
<p>   </p>
<p>Μια <em>λογική έκφραση</em> είναι μια παράσταση, η τιμή της οποίας είναι είτε αληθής/true είτε ψευδής/false. Τα επόμενα παραδείγματα χρησιμοποιούν τον τελεστή <code>==</code>, ο οποίος συγκρίνει δύο τελεστέους και επιστρέφει <code>True</code> αν είναι ίσοι και <code>False</code> σε διαφορετική περίπτωση:</p>
<pre class="python trinket"><code>&gt;&gt;&gt; 5 == 5
True
&gt;&gt;&gt; 5 == 6
False</code></pre>
<p><code>True</code> και <code>False</code> είναι ειδικές τιμές που ανήκουν στην κλάση <code>bool</code>, δεν είναι συμβολοσειρές:</p>
<p>     </p>
<pre class="python"><code>&gt;&gt;&gt; type(True)
&lt;class &#39;bool&#39;&gt;
&gt;&gt;&gt; type(False)
&lt;class &#39;bool&#39;&gt;</code></pre>
<p>Ο τελεστής <code>==</code> είναι ένας από τους <em>συγκριτικούς τελεστές</em>, οι υπόλοιποι είναι:</p>
<pre class="python"><code>x != y               # το x δεν είναι ίσο με το y
x &gt; y                # το x είναι μεγαλύτεο του y
x &lt; y                # το x είναι μικρότερο του y
x &gt;= y               # το x είναι μεγαλύτερο ή ίσο του y
x &lt;= y               # το x είναι μικρότερο ή ίσο του y
x is y               # το x είναι ίδιο με το y
x is not y           # το x δεν είναι ίδιο με το y</code></pre>
<p>Αν και αυτές οι πράξεις σας είναι πιθανώς γνωστές, τα σύμβολα της Python διαφέρουν από τα αντίστοιχα μαθηματικά σύμβολα. Ένα συνηθισμένο λάθος είναι το να χρησιμοποιήσετε ένα μόνο σύμβολο ίσου (<code>=</code>) αντί για ένα διπλό ίσο (<code>==</code>). Θυμηθείτε ότι το <code>=</code> είναι τελεστής εκχώρησης τιμής και το <code>==</code> είναι τελεστής σύγκρισης. Δεν έχουν νόημα τα <code>=&lt;</code> ή <code>=&gt;</code>.</p>
<p> </p>
<h2 id="λογικοί-τελεστές">Λογικοί τελεστές</h2>
<p> </p>
<p>Υπάρχουν τρεις <em>λογικοί τελεστές</em>: <code>and</code>, <code>or</code> και <code>not</code>. Η σημασιολογία (έννοια) αυτών των τελεστών είναι παρόμοια με τη σημασία τους στα αγγλικά (και, ή και όχι αντίστοιχα). Για παράδειγμα το</p>
<p><code>x &gt; 0 and x &lt; 10</code></p>
<p>είναι αληθές μόνο αν το <code>x</code> είναι μεγαλύτερο του 0 <em>και</em> μικρότερο του 10.</p>
<p>     </p>
<p>Το <code>n%2 == 0 or n%3 == 0</code> είναι αληθές αν <em>τουλάχιστον μία</em> από τις συνθήκες είναι αληθής, δηλαδή αν ο αριθμός διαιρείτεαι με το 2 <em>ή</em> το 3.</p>
<p>Τέλος, ο τελεστής <code>not</code> είναι η άρνηση μιας λογικής έκφρασης, έτσι το <code>not (x &gt; y)</code> είναι αληθές αν το <code>x &gt; y</code> είναι ψευδές, δηλαδή αν το <code>x</code> είναι μικρότερο ή ίσο του <code>y</code>.</p>
<p>Αυστηρά μιλώντας, οι τελεστέοι των λογικών τελεστών πρέπει να είναι λογικές εκφράσεις, αλλά η Python δεν είναι πολύ αυστηρή. Κάθε μη μηδενικός αριθμός ερμηνεύεται ως “αληθές”.</p>
<pre class="python"><code>&gt;&gt;&gt; 17 and True
True</code></pre>
<p>Αυτή η ευελιξία μπορεί να είναι χρήσιμη, αλλά υπάρχουν κάποιες λεπτόμέρειες σε αυτό, που μπορεί να προκαλέσουν σύγχυση. Ίσως θα ήταν καλύτερα να το αποφύγετε μέχρι να είστε σίγουροι ότι ξέρετε τι κάνετε.</p>
<h2 id="απλή-επιλογή">Απλή επιλογή</h2>
<p>    </p>
<p>Για να γράψουμε χρήσιμα προγράμματα, χρειαζόμαστε σχεδόν πάντα τη δυνατότητα να ελέγξουμε τις συνθήκες και να αλλάξουμε ανάλογα τη συμπεριφορά του προγράμματος. Οι <em>εντολές επιλογής</em> μας δίνουν αυτή τη δυνατότητα. Η πιο απλή μορφή τους είναι η εντολή <code>if</code>:</p>
<pre class="python"><code>if x &gt; 0 :
    print(&#39;το x είναι θετικό&#39;)</code></pre>
<p>Η λογική έκφραση που ακοουθεί την εντολή <code>if</code> ονομάζεται <em>συνθήκη</em>. Τελειώνουμε την γραμμή της εντολής <code>if</code> με τον χαρακτήρα άνω κάτω τελεία (:) και στη γραμμή(ές) μετά το if δημιουργούμε εσοχή.</p>
<figure>
<img src="../images/if.svg" alt="if Λογικό Διάγραμμα" style="height: 1.5in;"/>
<figcaption>
if Λογικό Διάγραμμα
</figcaption>
</figure>
<p>Εάν η λογική συνθήκη είναι αληθής, τότε οι εντολές με εσοχή εκτελούνται. Εάν η λογική συνθήκη είναι ψευδής, οι εντολές με εσοχή παραλείπονται.</p>
<p>  </p>
<p>Η εντολή <code>if</code> έχει την ίδια δομή με τους ορισμούς συνάρτησης ή τους βρόχους <code>for</code><a href="#fn1" class="footnote-ref" id="fnref1" role="doc-noteref"><sup>1</sup></a>. Η εντολή αποτελείται από μια γραμμή κεφαλίδας που τελειώνει με τνν άνω και κάτω τελεία (:) ακολουθούμενη από ένα μπλοκ εντολών με εσοχή. Τέτοιες εντολές ονομάζονται <em>σύνθετες εντολές</em> επειδή εκτείνονται σε περισσότερες από μία γραμμές.</p>
<p>Δεν υπάρχει όριο στον αριθμό των εντολών που μπορούν να εμφανιστούν στο μπλοκ των εντολών, αλλά πρέπει να υπάρχει τουλάχιστον μία. Περιστασιακά, είναι χρήσιμο να έχετε ένα μπλοκ χωρίς εντολές (συνήθως ως δέσμευση θέσης για κάποιον κώδικα, που δεν έχετε γράψει ακόμα). Σε αυτή την περίπτωση, μπορείτε να χρησιμοποιήσετε τη εντολή <code>pass</code>, η οποία δεν κάνει τίποτα.</p>
<p> </p>
<pre class="python"><code>if x &lt; 0 :
    pass          # πρέπει να χειριστώ τις αρνητικές τιμές!</code></pre>
<p>Εάν εισαγάγετε μια εντολή <code>if</code> στον διερμηνέα της Python, η προτροπή θα αλλάξει από <code>&gt;&gt;&gt;</code> σε τρεις τελείες για να υποδείξει ότι βρίσκεστε στη μέση ενός μπλοκ δηλώσεων, όπως φαίνεται παρακάτω:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Μικρό&#39;)
...
Μικρό
&gt;&gt;&gt;</code></pre>
<p>Όταν χρησιμοποιείτε τον διερμηνέα της Python, πρέπει να αφήσετε μια κενή γραμμή στο τέλος του μπλοκ, διαφορετικά η Python θα επιστρέψει σφάλμα:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Μικρό&#39;)
... print(&#39;Τέλος&#39;)
  File &quot;&lt;stdin&gt;&quot;, line 3
    print(&#39;Τέλος&#39;)
        ^
SyntaxError: invalid syntax</code></pre>
<p>Η κενή γραμμή στο τέλος ενός μπλοκ δηλώσεων δεν είναι απαραίτητη όταν γράφετε και εκτελείτε σενάριο, μπορεί όμως να βελτιώσει την αναγνωσιμότητα του κώδικα σας.</p>
<h2 id="σύνθετη-επιλογή">Σύνθετη επιλογή</h2>
<p>  </p>
<p>Η δεύτερη μορφή της εντολής <code>if</code> είναι η <em>σύνθετη επιλογή</em>, στην οποία υπάρχουν δύο περιπτώσεις και η συνθήκη καθορίζει ποια θα εκτελεστεί. Η σύνταξη μοιάζει με αυτήν:</p>
<pre class="python"><code>if x%2 == 0 :
    print(&#39;το x είναι άρτιος&#39;)
else :
    print(&#39;το x είναι περιττός&#39;)</code></pre>
<p>Εάν το υπόλοιπο, όταν το <code>x</code> διαιρεθεί με το 2 είναι 0, τότε ξέρουμε ότι το <code>x</code> είναι άρτιος και το πρόγραμμα εμφανίζει σχετικό μήνυμα. Εάν η συνθήκη είναι ψευδής εκτελείτε το δεύτερο μπλοκ εντολών.</p>
<figure>
<img src="../images/if-else.svg" alt="If-Then-Else Λογικό Διάγραμμα" style="height: 1.5in;"/>
<figcaption>
If-Then-Else Λογικό Διάγραμμα
</figcaption>
</figure>
<p>Δεδομένου ότι η συνθήκη πρέπει να είναι αληθής ή ψευδής, θα εκτελεστεί ακριβώς μία από τις εναλλακτικές περιπτώσεις. Οι εναλλακτικές περιπτώσεις ονομάζονται <em>κλάδοι</em>, επειδή αποτελούν διακλαδώσεις στη ροή εκτέλεσης.</p>
<p></p>
<h2 id="πολλαπλή-επιλογή">Πολλαπλή επιλογή</h2>
<p> </p>
<p>Μερικές φορές υπάρχουν περισσότερες από δύο δυνατότητες και χρειαζόμαστε περισσότερους από δύο κλάδους. Ένας τρόπος για να εκφράσετε έναν τέτοιο υπολογισμό είναι μια <em>πολλαπλή επιλογή</em>:</p>
<pre class="python"><code>if x &lt; y:
    print(&#39;το x είναι μικρότερο από το y&#39;)
elif x &gt; y:
    print(&#39;το x είναι μεγαλύτερο από το y&#39;)
else:
    print(&#39;τα x και y είναι ίσα&#39;)</code></pre>
<p>Το <code>elif</code> είναι μια συντομογραφία του “else if”. Και πάλι, θα εκτελεστεί ακριβώς ένας κλάδος.</p>
<figure>
<img src="../images/elif.svg" alt="If-Then-ElseIf Λογικό Διάγραμμα" style="height: 2.0in;"/>
<figcaption>
If-Then-ElseIf Λογικό Διάγραμμα
</figcaption>
</figure>
<p>Δεν υπάρχει όριο στον αριθμό των δηλώσεων <code>elif</code>. Εάν υπάρχει ο όρος <code>else</code>, πρέπει να είναι στο τέλος, αλλά δεν είναι απαραίτητο να υπάρχει.</p>
<p> </p>
<pre class="python"><code>if choice == &#39;a&#39;:
    print(&#39;Μάντεψες Λάθος&#39;)
elif choice == &#39;b&#39;:
    print(&#39;Μάντεψες Σωστά&#39;)
elif choice == &#39;c&#39;:
    print(&#39;Πλησίασες, αλλά όχι σωστό&#39;)</code></pre>
<p>Κάθε συνθήκη ελέγχεται με τη σειρά. Εάν η πρώτη είναι ψευδής, ελέγχεται η επόμενη και ούτω καθεξής. Εάν μία από αυτές είναι αληθής, ο αντίστοιχος κλάδος εκτελείται και η εντολή τελειώνει. Ακόμα κι αν περισσότερες από μία συνθήκες είναι αληθείς, εκτελείται μόνο ο πρώτος αληθής κλάδος.</p>
<h2 id="εμφωλευμένη-επιλογή">Εμφωλευμένη επιλογή</h2>
<p> </p>
<p>Μια εντολή επιλογής μπορεί να εμφωλευτεί σε άλλη. Θα μπορούσαμε να γράψουμε το παράδειγμα των τριών-κλάδων και έτσι:</p>
<pre class="python"><code>if x == y:
    print(&#39;τα x και y είναι ίσα&#39;)
else:
    if x &lt; y:
        print(&#39;το x είναι μικρότερο από το y&#39;)
    else:
        print(&#39;το x είναι μεγαλύτερο από το y&#39;)</code></pre>
<p>Η εξωτερική επιλογή περιέχει δύο κλάδους. Ο πρώτος κλάδος περιέχει μια απλή εντολή. Ο δεύτερος κλάδος περιέχει άλλη μια εντολή <code>if</code>, η οποία έχει δύο δικούς της κλάδους. Αυτοί οι δύο κλάδοι περιέχουν και οι δύο απλές εντολές, αν και θα μπορούσαν να ήταν και νέες εντολές επιλογής.</p>
<figure>
<img src="../images/nested.svg" alt="Εμφωλευμένες Εντολές If" style="height: 2.0in;"/>
<figcaption>
Εμφωλευμένες Εντολές If
</figcaption>
</figure>
<p>Αν και η χρήση εσοχών καθιστά εμφανή τη δομή, οι <em>εμφωλευμένες επιλογές</em> είναι δύσκολο να διαβαστούν πολύ γρήγορα. Γενικά, είναι καλή ιδέα να τις αποφεύγετε όταν μπορείτε.</p>
<p>Οι λογικοί τελεστές παρέχουν συχνά έναν τρόπο απλοποίησης των εμφωλευμένων επιλογών. Για παράδειγμα, μπορούμε να ξαναγράψουμε τον ακόλουθο κώδικα χρησιμοποιώντας μία μόνο εντολή επιλογής:</p>
<pre class="python"><code>if 0 &lt; x:
    if x &lt; 10:
        print(&#39;το x είναι ένας θετικός μονοψήφιος αριθμός.&#39;)</code></pre>
<p>Η εντολή <code>print</code> εκτελείται μόνο αν ικανοποιούνται και οι δύο συνθήκες, οπότε μπορούμε να έχουμε το ίδιο αποτέλεσμα χρησιμοποιώντας τον τελεστή <code>and</code>:</p>
<pre class="python"><code>if 0 &lt; x and x &lt; 10:
    print(&#39;το x είναι ένας θετικός μονοψήφιος αριθμός.&#39;)</code></pre>
<h2 id="εντοπισμός-εξαιρέσεων-χρησιμοποιώντας-το-try-και-except">Εντοπισμός εξαιρέσεων χρησιμοποιώντας το try και except</h2>
<p>Νωρίτερα είδαμε ένα τμήμα κώδικα όπου χρησιμοποιήσαμε τις συναρτήσεις <code>input</code> και <code>int</code> για να διαβάσουμε και να αναλύσουμε έναν ακέραιο αριθμό που εισήγαγε ο χρήστης. Είδαμε επίσης πόσο εύκολα μπορεί να οδηγήσει σε σφάλματα:</p>
<pre class="python"><code>&gt;&gt;&gt; μήνυμα = &quot;Με τί ταχύτητα πετάει ένα χελιδόνι;\n&quot;
&gt;&gt;&gt; ταχύτητα = input(μήνυμα)
Με τί ταχύτητα πετάει ένα χελιδόνι;
Τί εννοείς, ένα Αφρικανικό ή Ευρωπαϊκό χελιδόνι;
&gt;&gt;&gt; int(ταχύτητα)
ValueError: invalid literal for int() with base 10:
&gt;&gt;&gt;</code></pre>
<p>Όταν εκτελούμε αυτές τις εντολές στον διερμηνέα της Python, λαμβάνουμε ένα νέο μήνυμα από τον διερμηνέα, σκεφτόμαστε “ωχ” και προχωράμε στην επόμενη εντολή μας.</p>
<p>Ωστόσο, εάν γράψετε αυτόν τον κώδικα σε ένα σενάριο Python και παρουσιαστεί αυτό το σφάλμα, το σενάριό σας σταματά αμέσως γιατί εντοπίζει το πρόβλημα με ιχνηλάτηση/traceback. Δεν εκτελεί την ακόλουθη πρόταση.</p>
<p></p>
<p>Ακολουθεί ένα δείγμα προγράμματος για τη μετατροπή θερμοκρασίας Φαρενάιτ σε θερμοκρασία Κελσίου:</p>
<p>  </p>
<pre class="python"><code>inp = input(&#39;Εισαγάγετε τη θερμοκρασία Φαρενάιτ: &#39;)
fahr = float(inp)
cel = (fahr - 32.0) * 5.0 / 9.0
print(cel)

# Code: http://www.gr.py4e.com/code3/fahren.py</code></pre>
<p>Εάν εκτελέσουμε αυτόν τον κώδικα και του δώσουμε μη έγκυρη είσοδο, απλώς αποτυγχάνει με ένα όχι και τόσο φιλικό μήνυμα σφάλματος:</p>
<pre class="python trinket"><code>python fahren.py
Εισαγάγετε τη θερμοκρασία Φαρενάιτ:72
22.22222222222222</code></pre>
<pre class="python trinket"><code>python fahren.py
Εισαγάγετε τη θερμοκρασία Φαρενάιτ:fred
Traceback (most recent call last):
  File &quot;fahren.py&quot;, line 2, in &lt;module&gt;
    fahr = float(inp)
ValueError: could not convert string to float: &#39;fred&#39;</code></pre>
<p>Υπάρχει μια δομή εκτέλεσης υπό όρους ενσωματωμένη στην Python για να χειρίζεται αυτούς τους τύπους αναμενόμενων και/ή απροσδόκητων σφαλμάτων που ονομάζονται “try / except”. Η βάση των <code>try</code> και <code>except</code> είναι ότι γνωρίζετε ότι κάποια ακολουθία οδηγιών μπορεί να προκαλέσει πρόβλημα και θέλετε να προσθέσετε ορισμένες προτάσεις που θα εκτελεστούν σε περίπτωση σφάλματος. Αυτές οι πρόσθετες προτάσεις (το μπλοκ except) αγνοούνται εάν δεν προκληθεί σφάλμα.</p>
<p>Μπορείτε να θεωρήσετε τη λειτουργία <code>try</code> και <code>except</code> στην Python ως μια «δικλείδα ασφαλείας» για μια ακολουθία εντολών.</p>
<p>Μπορούμε να ξαναγράψουμε τον μετατροπέα θερμοκρασίας μας ως εξής:</p>
<pre class="python"><code>inp = input(&#39;Εισαγάγετε τη θερμοκρασία Φαρενάιτ:&#39;)
try:
    fahr = float(inp)
    cel = (fahr - 32.0) * 5.0 / 9.0
    print(cel)
except:
    print(&#39;Παρακαλώ εισάγετε έναν αριθμό&#39;)

# Code: http://www.gr.py4e.com/code3/fahren2.py</code></pre>
<p>Η Python ξεκινά εκτελώντας την ακολουθία εντολών που περιπεχονται στο μπλοκ <code>try</code>. Αν όλα πάνε καλά, παραλείπει το μπλοκ <code>except</code> και προχωρά. Εάν προκύψει πρόβλημα στο μπλοκ <code>try</code>, η Python βγαίνει από το μπλοκ <code>try</code> και εκτελεί την ακολουθία εντολών του μπλοκ <code>except</code>.</p>
<pre class="python trinket"><code>python fahren2.py
Εισαγάγετε τη θερμοκρασία Φαρενάιτ:72
22.22222222222222</code></pre>
<pre class="python trinket"><code>python fahren2.py
Εισαγάγετε τη θερμοκρασία Φαρενάιτ:fred
Παρακαλώ εισάγετε έναν αριθμό</code></pre>
<p>Η διαχείριση μιας εξαίρεσης με την εντολή <code>try</code> ονομάζεται <em>σύλληψη</em> της εξαίρεσης. Σε αυτό το παράδειγμα, ο όρος <code>except</code> εκτυπώνει ένα φιλικό μήνυμα σφάλματος. Σε γενικές γραμμές, η σύλληψη μιας εξαίρεσης σας δίνει την ευκαιρία να διορθώσετε το πρόβλημα ή να προσπαθήσετε ξανά ή τουλάχιστον να το πρόγραμμα τερματίσει χωρίς μήνυμα σφάλματος.</p>
<h2 id="ελαχιστοποίηση-αξιολόγησης-λογικών-εκφράσεων">Ελαχιστοποίηση αξιολόγησης λογικών εκφράσεων</h2>
<p>  </p>
<p>Όταν η Python επεξεργάζεται μια λογική έκφραση όπως η <code>x &gt;= 2 and (x/y) &gt; 2</code>, αξιολογεί την έκφραση από αριστερά προς τα δεξιά. Λόγω του ορισμού του <code>and</code>, αν το <code>x</code> είναι μικρότερο του 2, η έκφραση <code>x &gt;= 2</code> είναι <code>False</code> και έτσι συνολικά η έφραση είναι <code>False</code> ανεξάρτητα από το αν το <code>(x/y) &gt; 2</code> έχει ως αποτέλεσμα <code>True</code> ή <code>False</code>.</p>
<p>Όταν η Python διαπιστώσει ότι δεν θα να κερδίσει τίποτα με την αξιολόγηση της υπόλοιπης λογικής έκφρασης, σταματά την αξιολόγησή της και δεν κάνει τους υπολογισμούς στην υπόλοιπη λογική έκφραση. Όταν σταματήσει η αξιολόγηση μιας λογικής έκφρασης επειδή η συνολική τιμή είναι ήδη γνωστή, ονομάζεται <em>short-circuiting/βραχυκύκλωμα</em> της αξιολόγηση.</p>
<p>  </p>
<p>Ενώ αυτό μπορεί να φαίνεται σαν μια καλή τεχνική, η συμπεριφορά βραχυκυκλώματος οδηγεί σε μια εξυπνότερη τεχνική που ονομάζεται <em>τιμή φρουρός/guardian pattern</em>. Εξετάστε το ακόλουθο τμήμα κώδικα στον διερμηνέα της Python:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 2
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
True
&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>Ο τρίτος υπολογισμός απέτυχε επειδή η Python αξιολόγησε το <code>(x/y)</code> και το <code>y</code> ήταν μηδέν, γεγονός που προκάλεσε σφάλμα χρόνου εκτέλεσης. Αλλά το πρώτο και το δεύτερο παράδειγμα <em>δεν</em> απέτυχαν, επειδή στον πρώτο υπολογισμό το <code>y</code> ήταν μηδέν και στο δεύτερο, το πρώτο μέρος της έκφρασης, το <code>x &gt;= 2</code> αξιολογήθηκε ως <code>False</code> οπότε το <code>(x /y)</code> δεν εκτελέστηκε ποτέ λόγω του κανόνα <em>short-circuiting</em> και δεν προέκυψε σφάλμα.</p>
<p>Μπορούμε να κατασκευάσουμε τη λογική έκφραση με τέτοιο τρόπο ώστε να τοποθετήσουμε στρατηγικά έναν <em>φύλακα</em> αξιολόγηση, ακριβώς πριν από την αξιολόγηση που μπορεί να προκαλέσει σφάλμα ως εξής:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2 and y != 0
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>Στην πρώτη λογική έκφραση, το <code>x &gt;= 2</code> είναι <code>False</code>, έτσι η αξιολόγηση σταματά στο <code>and</code>. Στη δεύτερη λογική έκφραση, το <code>x &gt;= 2</code> είναι <code>True</code> αλλά το <code>y != 0</code> είναι <code>False</code> οπότε δεν φτάνουμε ποτέ στο <code>(x/y)</code>.</p>
<p>Στην τρίτη λογική έκφραση, το <code>y != 0</code> βρίσκεται <em>μετά</em> τον υπολογισμό <code>(x/y)</code> έτσι η έκφραση αποτυγχάνει με συνέπεια ένα σφάλμα.</p>
<p>Στη δεύτερη έκφραση, λέμε ότι το <code>y != 0</code> λειτουργεί ως <em>φρουρός</em> για να διασφαλίσει ότι εκτελούμε το <code>(x/y)</code> μόνο αν το <code>y</code> είναι μη μηδενικό.</p>
<h2 id="εκσφαλμάτωση">Εκσφαλμάτωση</h2>
<p> </p>
<p>Το traceback της Python εμφανίζεται όταν προκύψει ένα σφάλμα και περιέχει πολλές πληροφορίες, αλλά αυτές μπορεί να είναι υπερβολικές. Τα πιο χρήσιμα μέρη είναι συνήθως τα:</p>
<ul>
<li><p>Τι είδους λάθος ήταν και</p></li>
<li><p>Πού συνέβη.</p></li>
</ul>
<p>Τα σφάλματα σύνταξης είναι συνήθως εύκολο να βρεθούν, αλλά υπάρχουν μερικές παγίδες. Τα σφάλματα στους λευκούς χαρακτήρες μπορεί να είναι δύσκολα επειδή τα κενά και τα tab είναι αόρατα και έχουμε συνηθίσει να τα αγνοούμε.</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; x = 5
&gt;&gt;&gt;  y = 6
  File &quot;&lt;stdin&gt;&quot;, line 1
    y = 6
    ^
IndentationError: unexpected indent</code></pre>
<p>Σε αυτό το παράδειγμα, το πρόβλημα είναι ότι στη δεύτερη γραμμή έχει δημιουργηθεί εσοχή ενός διαστήματος. Αλλά το μήνυμα σφάλματος δείχνει το <code>y</code>, το οποίο είναι παραπλανητικό. Σε γενικές γραμμές, τα μηνύματα σφάλματος υποδεικνύουν πού εντοπίστηκε το πρόβλημα, αλλά το πραγματικό σφάλμα μπορεί να είναι νωρίτερα στον κώδικα, μερικές φορές σε προηγούμενη γραμμή.</p>
<p>Σε γενικές γραμμές, τα μηνύματα σφάλματος σας λένε πού ανακαλύφθηκε το πρόβλημα, αλλά συχνά δεν προκλήθηκε εκεί.</p>
<h2 id="γλωσσάριο">Γλωσσάριο</h2>
<dl>
<dt>traceback</dt>
<dd>Μια λίστα με τις λειτουργίες που εκτελούνται, που εκτυπώνονται όταν προκύψει ένα σφάλμα.
</dd>
<dt>short circuit - βραχυκύκλωμα</dt>
<dd>Όταν η Python αξιολογεί εν μέρει μια λογική έκφραση και σταματά την αξιολόγηση επειδή γνωρίζει την τελική τιμή για την έκφραση χωρίς να χρειάζεται να αξιολογήσει την υπόλοιπη έκφραση.
</dd>
<dt>εμφωλευμένη επιλογή</dt>
<dd>Μια εντολή επιλογής που εμφανίζεται σε έναν από τους κλάδους μιας άλλης εντολής επιλογής.
</dd>
<dt>εντολή επιλογής</dt>
<dd>Μια εντολή που διαφοροποιεί την ροή της εκτέλεσης ανάλογα με κάποια συνθήκη.
</dd>
<dt>κλάδος</dt>
<dd>Μία από τις εναλλακτικές ακολουθίες εντολών σε μια εντολή επιλογής.
</dd>
<dt>λογική έκφραση</dt>
<dd>Μια έκφραση της οποίας η τιμή είναι είτε <code>True</code> είτε <code>False</code>.
</dd>
<dt>λογικός τελεστής</dt>
<dd>Ένας από τους τελεστές που συνδυάζουν λογικές εκφράσεις: <code>and</code>, <code>or</code> και <code>not</code>.
</dd>
<dt>πολλαπλή επιλογή</dt>
<dd>Μια εντολή επιλογής με μια σειρά εναλλακτικών κλάδων.
</dd>
<dt>σύνθετη εντολή/compound statement</dt>
<dd>Μια εντολή που αποτελείτε από κεφαλίδα και σώμα. Η κεφαλίδα τελειώνει με άνω κάτω τελεία (:). Το σώμα τοποθετείται σε εσοχή, σε σχέση με την κεφαλίδα
</dd>
<dt>συνθήκη</dt>
<dd>Η λογική έκφραση σε μια εντολή επιλογής, που καθορίζει ποιος κλάδος θα εκτελεστεί.
</dd>
<dt>συγκριτικός τελεστής</dt>
<dd>Ένας από τους τελεστές που συγκρίνουν τους τελεστέους τους: <code>==</code>, <code>!=</code>, <code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, and <code>&lt;=</code>.
</dd>
<dt>σώμα</dt>
<dd>Το μπλοκ των εντολών μέσα σε μια σύνθετη εντολή.
</dd>
<dt>τιμή φρουρός</dt>
<dd>Όπου κατασκευάζουμε μια λογική έκφραση με πρόσθετες συγκρίσεις για να επωφεληθούμε από τη συμπεριφορά short-circuit/βραχυκυκλώματος.
</dd>
</dl>
<h2 id="ασκήσεις">Ασκήσεις</h2>
<p><strong>Άσκηση 1: Ξαναγράψτε τον υπολογισμό της αμοιβής για να δώσετε στον υπάλληλο 1,5 φορές το ωρομίσθιο για τις ώρες εργασίας πέραν των 40 ωρών.</strong></p>
<pre class="python trinket"><code>Δώστε Ώρες: 45
Δώστε Ποσό/Ώρα: 10
Μισθός: 475.0</code></pre>
<p><strong>Άσκηση 2: Ξαναγράψτε το πρόγραμμα πληρωμών χρησιμοποιώντας το <code>try</code> και <code>except</code> έτσι ώστε το πρόγραμμά σας να χειρίζεται μη αριθμητικές τιμές εισόδου σωστά, εκτυπώνοντας ένα μήνυμα και τερματίζοντας την εκτέλεση. Παρακάτω φαίνεται το αποτέλεσμα δύο εκτελέσεων του προγράμματος:</strong></p>
<pre class="python trinket"><code>Δώστε Ώρες: 20
Δώστε Ποσό/Ώρα: εννιά
Σφάλμα, παρακαλώ δώστε αριθμητική είσοδο</code></pre>
<pre class="python trinket"><code>Δώστε Ώρες: σαράντα
Σφάλμα, παρακαλώ δώστε αριθμητική είσοδο</code></pre>
<p>**Άσκηση 3: Γράψτε ένα πρόγραμμα για να ζητήσετε βαθμολογία μεταξύ 0,0 και 1,0. Εάν η βαθμολογία είναι εκτός εμβέλειας, να εκτυπώνετε ένα μήνυμα σφάλματος. Εάν η βαθμολογία είναι μεταξύ 0.0 και 1.0, να εκτυπώνετε μια αξιολόγηση με βάση τον ακόλουθο πίνακα:</p>
<pre class="python trinket"><code>Βαθμός   Αξιολόγηση
&gt;= 0.9     A
&gt;= 0.8     B
&gt;= 0.7     C
&gt;= 0.6     D
 &lt; 0.6     F</code></pre>
<pre class="text"><code>Εισάγετε βαθμολογία: 0.95
A</code></pre>
<pre class="text"><code>Εισάγετε βαθμολογία: τέλεια
Άκυρη βαθμολογία</code></pre>
<pre class="text"><code>Εισάγετε βαθμολογία: 10.0
Άκυρη βαθμολογία</code></pre>
<pre class="text"><code>Εισάγετε βαθμολογία: 0.75
C</code></pre>
<pre class="text"><code>Εισάγετε βαθμολογία: 0.5
F</code></pre>
<p>Εκτελέστε το πρόγραμμα επανειλημμένα όπως φαίνεται παραπάνω για να το δοκιμάσετε για τις διαφορετικές τιμές εισόδου.</p>
<section class="footnotes" role="doc-endnotes">
<hr />
<ol>
<li id="fn1" role="doc-endnote"><p>Θα μάθουμε για τις συναρτήσεις στο Κεφάλαιο 4 και τους βρόχους στο Κεφάλαιο 5.<a href="#fnref1" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
</ol>
</section>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
