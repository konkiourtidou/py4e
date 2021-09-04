<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1Εγκατάσταση της Python 3 Στα Windows 10</h1>
<p><b>Σημείωση:</b> Οποιαδήποτε λογικά πρόσφατη έκδοση της Python είναι αποδεκτή για αυτό το μάθημα.
Εάν έχετε ήδη μια έκδοση της Python 3.x στον υπολογιστή σας, θα πρέπει να μπορείτε να την χρησιμοποιήσετε
για αυτήν την τάξη.
</p>
<p>Κατεβάστε και εγκαταστήστε την Python 3.x από το:</p>
<p><a href="http://www.python.org/download/" target="_blank">http://www.python.org/download/</a></p>
<p>Κατά την εγκατάσταση της Python, βεβαιωθείτε ότι έχετε επιλέξει το "Add Python 3.5 to PATH", ώστε να μπορείτε να πληκτρολογήσετε 
<b>python</b> στη γραμμή εντολών για να εκτελέσετε Python.
</p>
<b>Εγκατάσταση του Συντάκτη Κειμένου Atom</b>
<p>Κατεβάστε και εγκαταστήστε το Atom από αυτόν τον ιστότοπο:
</p>
<p><a href="http://atom.io" target="_blank">http://atom.io</a></p>

<h1>Γράφοντας ένα πρόγραμμα Python 3 με το Atom στα Windows-10</h1>
<p>
Έχουμε ένα σύντομο 
<a href="https://www.youtube.com/watch?v=uZbaYeYGYRQ&index=1&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank">
βίντεο βήμα προς βήμα</a> που δείχνει πώς να εγκαταστήσετε την Python 3 και το Atom και να γράψετε το πρώτο σας πρόγραμμα.
</p>
<h1>Σημειώσεις Γραμμής Εντολών των Windows</h1>
<p>
Όταν η γραμμή εντολών <b style="color:black;background-color:#a0ffff">ξεκινήσει</b>, βρίσκεστε στον "αρχικό" κατάλογό σας. 
Ο αρχικός σας κατάλογος είναι διαφορετικός για καθένα από τα λειτουργικά συστήματα. Σε καθένα από αυτά τα παραδείγματα, ο 
συνδεδεμένος λογαριασμός σας θα πρέπει να χρησιμοποιείται αντί του csev.</p>
<pre>
    Windows XP:             C:\Documents and Settings\csev
    Windows Vista:          C:\Users\csev
    Windows 7:              C:\Users\csev
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
</pre>
Η γραμμή γραμμής εντολών συνήθως περιλαμβάνει κάποια ένδειξη για το πού βρίσκεστε στη δομή φακέλου στον σκληρό σας δίσκο.
<p>
Αν θέλετε πραγματικά να καταλάβετε πού βρίσκεστε, χρησιμοποιήστε την εντολή cd χωρίς παραμέτρους</p>
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>
<p>
Πού μπορείτε να πάτε;
</p>
<p>
Γενικά το πρώτο πράγμα που πρέπει να κάνετε όταν ανοίγετε μια διεπαφή γραμμής εντολών είναι να μεταβείτε στο σωστό φάκελο. 
Πείτε ότι θέλετε να εκτελέσετε ένα αρχείο από την επιφάνεια εργασίας σας. Η εντολή είναι <b>cd Desktop</b> (ή <b>cd OneDrive\Desktop</b>)
για να μπείτε στο φάκελο που είναι η επιφάνεια εργασίας σας. Μπορείτε να χρησιμοποιήσετε την εντολή <b>di </b> για να δείτε ποια
αρχεία βρίσκονται στον τρέχοντα κατάλογο και την εντολή <b>cd ..</b> για να πάτε "<b style="color:black;background-color:#a0ffff">πάνω</b>" έναν κατάλογο
</p>
<p> 
<b>Έξυπνο Κόλπο:</b> Στην εντολή cd, μπορείτε να πληκτρολογήσετε μερικώς ένα όνομα φακέλου, όπως το Desktop, και στη συνέχεια να πατήσετε το πλήκτρο TAB 
και το σύστημα θα συμπληρώσει αυτόματα το όνομα του φακέλου, εάν έχετε πληκτρολογήσει αρκετά ώστε το σύστημα να μπορεί να μαντέψει με ακρίβεια τι σκοπεύατε να πληκτρολογήσετε.
</p>
<p>
Αν χαθείτε...
</p>
<p>
Εάν δεν μπορείτε να καταλάβετε σε ποιο φάκελο βρίσκεστε και/ή δεν μπορείτε να καταλάβετε πώς να φτάσετε 
στον φάκελο στον οποίο θέλετε να φτάσετε - απλώς κλείστε και ανοίξτε ξανά το παράθυρο Γραμμή εντολών/Τερματικό.
Θα επιστρέψετε στον "αρχικό" κατάλογο - έτσι θα μπορέσετε να ξεκινήσετε από μια γνωστή τοποθεσία.
</p>
<p>
Μερικές Καλές Συμβουλές στη Διεπαφή Γραμμής Εντολών των Windows
</p>
<p>
Εάν κάνετε κλικ στο μικρό εικονίδιο στην επάνω αριστερή γωνία του παραθύρου της γραμμής εντολών και επιλέξετε 
Preferences/Προτιμήσεις-μπορείτε να ορίσετε πολλά πράγματα σχετικά με τη γραμμή εντολών - πιθανότατα το πιο 
σημαντικό είναι να ορίσετε το Μέγεθος του buffer ιστορικού εντολών σε 999.
</p>
<h1>Εκτέλεση του Προγράμματος Python στη Γραμμή Εντολών</h1>
<p>
Για να εκτελέσετε το πρόγραμμά σας στη γραμμή εντολών πληκτρολογείτε στη γραμμή εντολών.
Τα Windows γνωρίζουν ότι τα αρχεία που τελειώνουν με επίθημα ".py" είναι προγράμματα Python.
<pre>
    python firstprog.py
</pre>
or
<pre>
    firstprog.py
</pre>
Όπου firstprog.py είναι το όνομα του αρχείου που περιέχει το πρόγραμμα Python.
Βεβαιωθείτε ότι χρησιμοποιείτε την εντολή cd ώστε να βρίσκεται στο σωστό κατάλογο που περιέχει το αρχείο του προγράμματος σας.
</p>
<p> 
Μπορείτε να εκτελέσετε το πρόγραμμά σας ξανά και ξανά στο παράθυρο εντολών.
Υπόδειξη: Μπορείτε να χρησιμοποιήσετε το πλήκτρο βέλους <b style = "color: black; background-color:#a0ffff">επάνω</b> 
για να μετακινηθείτε πίσω στις προηγούμενες εντολές που εκτελέσατε και να τις εκτελέσετε ξανά πατώντας enter. Αυτό σας
επιτρέπει να επεξεργαστείτε γρήγορα και να επανεκτελέσετε το πρόγραμμά σας, για να κάνετε και να δοκιμάσετε αλλαγές.
</p>
<?php include('footer.php');?>
