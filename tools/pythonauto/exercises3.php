<?php

$EXERCISES =
Array(
"hello" => Array (
"qtext" => "Γράψτε ένα πρόγραμμα που χρησιμοποιεί μια εντολή <b>print</b> για να πει 'hello world' όπως φαίνεται στην 'Επιθυμητή έξοδο'.",
"desired" => "hello world",
"code" => '# ο παρακάτω κώδικας σχεδόν λειτουργεί
prinq("hello world")',
"checks" => Array(
"print" => "Πρέπει να χρησιμοποιήσετε μια εντολή print στον κώδικά σας."
)),

"loop" => Array (
"qtext" => "Γράψτε ένα πρόγραμμα, που χρησιμοποιεί έναν βρόχο <b>for</b> και την ενσωματωμένη συνάρτηση
<b>range</b> για να γράψει τρεις αριθμούς όπως φαίνεται στην 'Επιθυμητή έξοδο'.",
"desired" => "0
1
2",
"code" => 'print(range(3))',
"checks" => Array(
"for" => "Πρέπει να παράγετε τους αριθμούς χρησιμοποιώντας έναν βρόχο for.",
"print" => "Πρέπει να χρησιμοποιήσετε μια δήλωση print εντός του βρόχου.",
"range" => "Θα πρέπει να χρησιμοποιήσετε τη συνάρτηση range για να 
δημιουργήσετε τη λίστα αριθμών στη δήλωση for.",
":" => "Η δήλωση for πρέπει να τελειώνει με άνω κάτω τελεία (:) και η 
επόμενη γραμμή πρέπει να έχει εσοχή"
)),

"2.2" => Array (
"qtext" => "<b>2.2</b> Γράψτε ένα πρόγραμμα που χρησιμοποιεί την <b>input</b>
για να ζητά από το χρήστη το όνομά του και στη συνέχεια τον καλωσορίζει.
Λάβετε υπόψη ότι η <b>input</b> θα εμφανίσει ένα παράθυρο διαλόγου.
Εισαγάγετε το <b> Sarah </b> στο αναδυόμενο πλαίσιο όταν σας ζητηθεί,
ώστε η έξοδός σας να ταιριάζει με την επιθυμητή έξοδο. ",
"desired" => "Hello Sarah",
"code" => '# Ο παρακάτω κώδικας σχεδόν λειτουργεί

name = input("Enter your name: ")
print("Howdy ")',
"checks" => Array(
"input" => "Πρέπει να ζητήσετε το όνομα του χρήστη χρησιμοποιώντας τη συνάρτηση input().",
"!Sarah" => "Πρέπει πραγματικά να ζητήσετε το όνομα του χρήστη",
"print" => "Πρέπει να χρησιμοποιήσετε την εντολή print για να εκτυπώσετε τη σωστή έξοδο."
)),

"2.3" => Array(
"qtext" => "<b>2.3</b> Γράψτε ένα πρόγραμμα που προτρέπει τον χρήστη
να εισάγει ώρες και ωρομίσθιο και να υπολογίζει και να εκτυπώνει τον
ακαθάριστο μισθό του. Εισάγετε 35 ώρες και ωρομίσθιο 2.75 για να ελέγξετε το
πρόγραμμα (ο μισθός θα πρέπει να είναι 96.25). Θα πρέπει να χρησιμοποιήσετε το 
<b>input</b> για να διαβάσετε τη συμβολοσειρά και το <b>float()</b> για να
μετατρέψετε τη συμβολοσειρά σε αριθμό. Μην ασχοληθείτε με τον έλεγχο σφαλμάτων
- υποθέστε ότι ο χρήστης πληκτρολογεί τους αριθμούς σωστά.",
"desired" => "Pay: 96.25",
"code" => '# Η πρώτη γραμμή του προγράμματος σας δίνεται έτοιμη

hrs = input("Enter Hours:")',
"checks" => Array(
"input" => "Πρέπει να ζητήσετε την εισαγωγή των ωρών και του ωρομισθίου χρησιμοποιώντας την συνάρτηση input().",
"print" => "Πρέπει να χρησιμοποιήσετε την εντολή print για να εκτυπώσετε τη σωστή έξοδο.",
"float" => "Πρέπει να χρησιμοποιήσετε την ενσωματωμένη συνάρτηση float() για να μετατρέψετε τη συμβολοσειρά σε αριθμό.",
"*" => "Για να πολλαπλασιάσετε τις ώρες με το ωρομίσθιο, μετά την ανάγνωσή τους, χρησιμοποιήστε τον τελεστή '*'.",
"!35" => "Δεν πρέπει να συμπεριλάβετε τα δεδομένα εισόδου στον κώδικά σας. Πρέπει να διαβάσετε τις τιμές για τις ώρες και το ωρομίσθιο χρησιμοποιώντας το input().",
"!2.75" => "Δεν πρέπει να συμπεριλάβετε τα δεδομένα εισόδου στον κώδικά σας. Πρέπει να διαβάσετε τις τιμές για τις ώρες και το ωρομίσθιο χρησιμοποιώντας το input().",
"!96.25" => "Πρέπει πραγματικά να υπολογίσετε τον μισθό.")),


"3.1" => Array(
"qtext" => "<b>3.1</b> Γράψτε ένα πρόγραμμα που προτρέπει τον χρήστη 
να εισάγει ώρες και ωρομίσθιο και να υπολογίζει τον μεικτό μισθό του.
Ο μισθός υπολογίζεται με το ωρομίσθιο για τις πρώτες 40 ώρες και 
1.5 φορά το ωρομίσθιο για όλες τις υπόλοιπες ώρες, μετά τις πρώτες 40 ώρες. 
Για να ελέγξετε το πρόγραμμά σας χρησιμοποιήστε το 45 για τις ώρες και για το ωρομίσθιο 10.50
(ο μισθός που θα προκύψει θα πρέπει να είναι 498.75). 
Πρέπει να χρησιμοποιήσετε το <b>input</b>
για να διαβάσετε τη συμβολοσειρά και <b>float()</b> για να μετατρέψετε τη
συμβολοσειρά σε αριθμό. Μην ασχοληθείτε με τον έλεγχο σφαλμάτων - υποθέστε ότι
ο χρήστης πληκτρολογεί τους αριθμούς σωστά.",
"desired" => "498.75",
"desired2" => "Pay: 498.75",
"code" => 'hrs = input("Enter Hours:")
h = float(hrs)',
"checks" => Array(
"input" => "Πρέπει να ζητήσετε την εισαγωγή των ωρών και του ωρομισθίου χρησιμοποιώντας την συνάρτηση input().",
"print" => "Πρέπει να χρησιμοποιήσετε την εντολή print για να εκτυπώσετε τη σωστή έξοδο στο output.",
"if" => "Πρέπει να χρησιμοποιείσετε την εντολή if για να αποφασίσετε αν θα υπολογιστούν υπερωρίες ή όχι.",
"float" => "Πρέπει να χρησιμοποιήσετε την ενσωματωμένη συνάρτηση float() για να μετατρέψετε τη συμβολοσειρά σε έναν αριθμό.",
"!45" => "Πρέπει να διαβάσετε από το πληκτρολόγιο τα δεδομένα χρησιμοποιώντας την input() και στη συνέχεια να τα μετατρέψετε στον κατάλληλο τύπο. Το νούμερο '45' δεν πρέπει να περιέχεται στο πρόγραμμά σας.",
"!10.5" => "Πρέπει να διαβάσετε από το πληκτρολόγιο τα δεδομένα χρησιμοποιώντας την input() και στη συνέχεια να τα μετατρέψετε στον κατάλληλο τύπο.",
"!498" => "Πρέπει πραγματικά να υπολογίσετε τον μισθό.")),

"3.3" => Array(
"qtext" => "<b>3.3</b> Γράψτε ένα πρόγραμμα που ζητά έναν βαθμό μεταξύ 0.0 και
1.0. Αν ο βαθμός είναι εκτός ορίων, εμφανίζει ένα μήνυμα λάθους. Αν ο βαθμός
είναι μεταξύ 0.0 και 1.0, εκτυπώνει την αντίστοιχη αξιολόγηση με βάση τον ακόλουθο πίνακα:<br/>
Βαθμός  Αξιολόγηση<br/>
>= 0.9     A<br/>
>= 0.8     B<br/>
>= 0.7     C<br/>
>= 0.6     D<br/>
< 0.6      F<br/>
Εάν ο χρήστης εισάγει μια τιμή εκτός ορίων, εκτυπώστε ένα κατάλληλο μήνυμα σφάλματος
και βγείτε. Για να ελέγξετε το πρόγραμμά σας, εισαγάγετε ως βαθμολογία το 0.85.
",
"desired" => "Β",
"code" => 'score = input("Enter Score: ")',
"checks" => Array(
"input" => "Πρέπει να ζητήσετε το βαθμό χρησιμοποιώντας την συνάρτηση input().",
"float" => "Πρέπει να χρησιμοποιήσετε την ενσωματωμένη συνάρτηση float() για να μετατρέψετε τη συμβολοσειρά σε αριθμό.",
"print" => "Πρέπει να χρησιμοποιήσετε την εντολή print για να εμφανίσετε το αποτέλεσμα.",
"if" => "Πρέπει να χρησιμοποιείσετε μια εντολή if για να ελέγξετε την τιμή του βαθμού.",
"elif" => "Ένας από τους μαθησιακούς στόχους αυτής της εργασίας είναι η χρήση μιας εντολής elif, κατά τον έλεγχο της βαθμολογίας.")
),

"4.6" => Array(
"qtext" => "<b>4.6</b> Γράψτε ένα πρόγραμμα που προτρέπει τον χρήστη 
να εισάγει ώρες και ωρομίσθιο και υπολογίζει τον μεικτό μισθό του.
Ο μισθός υπολογίζεται με το ωρομίσθιο για τις πρώτες 40 ώρες και 
1.5 φορά το ωρομίσθιο για όλες τις υπόλοιπες ώρες, μετά τις πρώτες 40 ώρες. 
Τοποθετήστε τη λογική του υπολογισμού σε μια συνάρτηση με όνομα <b>computepay()</b>
και καλέστε τη συνάρτηση για να εκτελέσει τον υπολογισμό. Η συνάρτηση πρέπει να
επιστρέφει μια τιμή. Χρησιμοποιήστε 45 ώρες και ωρομίσθιο 10.50 την ώρα για να
ελέγξετε το πρόγραμμα (ο μεικτός μισθός πρέπει να είναι 498.75).
Πρέπει να χρησιμοποιήσετε την <b>input</b> για να διαβάσετε τη συμβολοσειρά και
το <b>float()</b> για να μετατρέψετε τη συμβολοσειρά σε αριθμό.
Μην ασχοληθείτε με τον έλεγχο σφαλμάτων - υποθέστε ότι ο χρήστης πληκτρολογεί
τους αριθμούς σωστά.  Μην ονομάσετε την μεταβλητή σας sum και μη
χρησιμοποιήσετε τη συνάρτηση sum().
",
"desired" => "Pay 498.75",
"code" => 'def computepay(h, r):
    return 42.37

hrs = input("Enter Hours:")
p = computepay(10, 20)
print("Pay", p)',
"checks" => Array(
"input" => "You must prompt the pay and rate using the input() function.",
"print" => "You must use the print statement to print the output.",
"!45" => "You must prompt for the data.",
"!10.5" => "You must prompt for the data.",
"if" => "You should use an if statement to decide to to the overtime computation or not.",
"float" => "You should use the built-in float() function to convert from a string to a float.",
"def" => "You must use a function called computepay to do the computation.",
"!sum(" => "Do not use a variable named sum or a function named sum()",
"return" => "You must use a return statement to pass the computed pay back to the main code.",
"computepay" => "You must use a function called computepay to do the computation.",
"!475" => "You must actually calculate the pay.")
),

"5.2" => Array(
"qtext" => "<b>5.2</b> Write a program that repeatedly prompts a user for integer numbers
until the user enters 'done'.  Once 'done' is entered, print out the largest and smallest
of the numbers.  If the user enters anything other than a valid number catch it
with a try/except and put out an appropriate message and ignore the number.
Enter 7, 2, bob, 10,  and 4 and match the output below.
",
"desired" => "Invalid input
Maximum is 10
Minimum is 2",
"code" => 'largest = None
smallest = None
while True:
    num = input("Enter a number: ")
    if num == "done":
        break
    print(num)

print("Maximum", largest)',
"checks" => Array(
"input" => "You must prompt for the numbers using the input() function.",
"print" => "You must use the print statement to print the output.",
"while" => "You should use a while statement to read the numbers.",
"int" => "You should use the int() function to convert from a string to an integer.",
"! 2" => "You should actually compute the maximum and minimum.",
"!=2" => "You should actually compute the maximum and minimum.",
"! 10" => "You should actually compute the maximum and minimum.",
"!=10" => "You should actually compute the maximum and minimum.",
"try" => "You should handle bad numbers using a try/except structure.",
"except" => "You should handle bad numbers using a try/except structure.")
),

"6.5" => Array(
"qtext" => "<b>6.5</b> Write code using find() and string slicing (see section 6.10) to extract
the number at the end of the line below.   Convert the extracted value to a floating point
number and print it out.",
"desired" => "0.8475",
"code" => 'text = "X-DSPAM-Confidence:    0.8475"',
"checks" => Array(
"find" => "You should use the find function to get the position of the colon in the string.",
":" => "You should use string slicing [n:m] to extract data from the string.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!"0.8475"' =>  "You must actually pull the data from the string.")
),

"fopen" => Array(
"qtext" => 'This Python program opens the file
"mbox-short.txt" and counts the number of lines in the file.',
"desired" => "1910 Lines",
"code" => 'fh = open("mbox-short.txt", "r")

count = 0
for line in fh:
   count = count + 1

print(count,"Lines")
'
),

"7.1" => Array(
"qtext" => "<b>7.1</b> Write a program that prompts for a file name, then opens that file
and reads through the file, and print the contents of the file in upper case.  Use
the file <b>words.txt</b> to produce the output below.".
'<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/words.txt" target="_blank">
http://www.py4e.com/code3/words.txt</a>',
"desired" => "WRITING PROGRAMS OR PROGRAMMING IS A VERY CREATIVE
AND REWARDING ACTIVITY  YOU CAN WRITE PROGRAMS FOR
MANY REASONS RANGING FROM MAKING YOUR LIVING TO SOLVING
A DIFFICULT DATA ANALYSIS PROBLEM TO HAVING FUN TO HELPING
SOMEONE ELSE SOLVE A PROBLEM  THIS BOOK ASSUMES THAT
{\EM EVERYONE} NEEDS TO KNOW HOW TO PROGRAM AND THAT ONCE
YOU KNOW HOW TO PROGRAM, YOU WILL FIGURE OUT WHAT YOU WANT
TO DO WITH YOUR NEWFOUND SKILLS

WE ARE SURROUNDED IN OUR DAILY LIVES WITH COMPUTERS RANGING
FROM LAPTOPS TO CELL PHONES  WE CAN THINK OF THESE COMPUTERS
AS OUR PERSONAL ASSISTANTS WHO CAN TAKE CARE OF MANY THINGS
ON OUR BEHALF  THE HARDWARE IN OUR CURRENT-DAY COMPUTERS
IS ESSENTIALLY BUILT TO CONTINUOUSLY AS US THE QUESTION
WHAT WOULD YOU LIKE ME TO DO NEXT

OUR COMPUTERS ARE FAST AND HAVE VASTS AMOUNTS OF MEMORY AND
COULD BE VERY HELPFUL TO US IF WE ONLY KNEW THE LANGUAGE TO
SPEAK TO EXPLAIN TO THE COMPUTER WHAT WE WOULD LIKE IT TO
DO NEXT IF WE KNEW THIS LANGUAGE WE COULD TELL THE
COMPUTER TO DO TASKS ON OUR BEHALF THAT WERE REPTITIVE
INTERESTINGLY, THE KINDS OF THINGS COMPUTERS CAN DO BEST
ARE OFTEN THE KINDS OF THINGS THAT WE HUMANS FIND BORING
AND MIND-NUMBING",
"code" => '# Use words.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
',
"xcode" => '# Use words.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
text = fh.read().strip()
print(text.upper())
',
"checks" => Array(
"input" => "You must prompt for the file name using the input() function.",
"open" => "You need to use open() to open the file.",
"print" => "You must use the print statement to print the lines.",
"strip" => "You should use strip() or rstrip() to avoid double newlines.  You may need to scroll down to see a mis-match of the output.",
"upper" => "You should use the upper() function to convert the lines to upper case.")
),

"7.2" => Array(
"qtext" => '<b>7.2</b> Write a program that prompts for a file name, then opens that file
and reads through the file, looking for lines of the form:
<pre>
X-DSPAM-Confidence:    0.8475
</pre>
Count these lines and extract the floating point values from each
of the lines and compute the average of those values and produce an output
as shown below.  Do not use the sum() function or a variable named sum in your solution.
<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/mbox-short.txt" target="_blank">
http://www.py4e.com/code3/mbox-short.txt</a> when you are testing
below enter <b>mbox-short.txt</b> as the file name.',
"desired" => "Average spam confidence: 0.7507185185185187",
"code" => '# Use the file name mbox-short.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
for line in fh:
    if not line.startswith("X-DSPAM-Confidence:"):
        continue
    print(line)
print("Done")
',
"xcode" => '# Use the file name mbox-short.txt as the file name
fname = input("Enter file name: ")
fh = open(fname)
tot = 0.0
count = 0
for line in fh:
    if not line.startswith("X-DSPAM-Confidence:") : continue
    words = line.split()
    tot = tot + float(words[1])
    count = count + 1
print("Average spam confidence:", tot/count)
',
"checks" => Array(
"input" => "You must prompt for the file name using the input() function.",
"open" => "You need to use open() to open the file.",
"!sum" => "You should not use the sum() function and avoid using sum as a variable.",
"float" => "You should use the float() function to convert from a string to an integer.",
'!18518' =>  "You must actually pull the data from the strings and convert it.",
"/" => "Average is usually a total / count.")
),

"8.4" => Array(
"qtext" => '<b>8.4</b> Open the file <b>romeo.txt</b> and read it line by
line.  For each line, split the line into a list of words using the <b>split()</b>
method.   The program should build a list of words.  For each word on each line
check to see if the word is already in the list and if not append it to the list.
When the program completes, sort and print the resulting words in python
sort() order as shown in the desired output.
<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/romeo.txt" target="_blank">
http://www.py4e.com/code3/romeo.txt</a>',
"desired" => "['Arise', 'But', 'It', 'Juliet', 'Who', 'already', 'and', 'breaks', 'east', 'envious', 'fair', 'grief', 'is', 'kill', 'light', 'moon', 'pale', 'sick', 'soft', 'sun', 'the', 'through', 'what', 'window', 'with', 'yonder']",
"code" => 'fname = input("Enter file name: ")
fh = open(fname)
lst = list()
for line in fh:
print(line.rstrip())
',
"xcode" => 'fname = input("Enter file name: ")
fh = open(fname)
lst = list()
for line in fh:
    words = line.split()
    for word in words:
        if word in lst: continue
        lst.append(word)
lst.sort()
print(lst)
',
"checks" => Array(
"split" => "You should use split() to break each line into words.",
"append" => "You should use append() to add the word to the list if it is not there.",
"!extend" => "You should not use extend() in this assignment.",
"open" => "You need to use open() to open the file.",
"sort" => "You need to use sort() to sort the list before you print it out.",
"!'yonder'" => "You should not put the output data in strings",
"!.remove(" => "You should not need to use the remove() method",
"!.set(" => "You should not need to use the set() method",
"for" => "You need two for loops. One for the lines and one for the words on each line.")
),

"8.5" => Array(
"qtext" => "<b>8.5</b> Open the file <b>mbox-short.txt</b> and read it line by
line.  When you find a line that starts with 'From ' like the following line:
<pre>
From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
</pre>
You will parse the From line using split() and print out the second word in the line
(i.e. the entire address of the person who sent the message).  Then print out
a count at the end.
<p>
<b>Hint:</b> make sure not to include the lines that start with 'From:'. Also look at the last line of the sample output to see how to print the count.".
'<p>
You can download the sample data at
<a href="http://www.py4e.com/code3/mbox-short.txt" target="_blank">
http://www.py4e.com/code3/mbox-short.txt</a>',
"desired" => "stephen.marquard@uct.ac.za
louis@media.berkeley.edu
zqian@umich.edu
rjlowe@iupui.edu
zqian@umich.edu
rjlowe@iupui.edu
cwen@iupui.edu
cwen@iupui.edu
gsilver@umich.edu
gsilver@umich.edu
zqian@umich.edu
gsilver@umich.edu
wagnermr@iupui.edu
zqian@umich.edu
antranig@caret.cam.ac.uk
gopal.ramasammycook@gmail.com
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
david.horwitz@uct.ac.za
stephen.marquard@uct.ac.za
louis@media.berkeley.edu
louis@media.berkeley.edu
ray@media.berkeley.edu
cwen@iupui.edu
cwen@iupui.edu
cwen@iupui.edu
There were 27 lines in the file with From as the first word",
"code" => 'fname = input("Enter file name: ")
if len(fname) < 1:
    fname = "mbox-short.txt"

fh = open(fname)
count = 0

print("There were", count, "lines in the file with From as the first word")
',
"xcode" => 'fname = input("Enter file name: ")
if len(fname) < 1 : fname = "mbox-short.txt"

fh = open(fname)
count = 0
for line in fh:
    wds = line.split()
    if len(wds) < 2 : continue
    if wds[0] != "From" : continue
    print(wds[1])
    count = count + 1
print("There were", count, "lines in the file with From as the first word")
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"split" => "You should use split() to break each line into words.",
"if" => "You need to use one or more if statements to skip the lines that do not start with 'From '.",
"open" => "You need to use open() to open the file.")
),

"9.4" => Array(
"qtext" => "<b>9.4</b> Write a program to read through the <b>mbox-short.txt</b> and figure
out who has sent the greatest number of mail messages.  The program looks
for 'From ' lines and takes the second
word of those lines as the person who sent the mail.  The program creates a Python
dictionary that maps the sender's mail address to a count of the number of times
they appear in the file.  After the dictionary is produced, the program reads through
the dictionary using a maximum loop to find the most prolific committer.",
"desired" => "cwen@iupui.edu 5",
"code" => 'name = input("Enter file:")
if len(name) < 1:
    name = "mbox-short.txt"
handle = open(name)
',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 2 : continue
    if wds[0] != "From" : continue
    email = wds[1]
    counts[email] = counts.get(email,0) + 1

bigcount = None
bigname = None
for name,count in counts.items():
    if bigname is None or count > bigcount:
        bigname = name
        bigcount = count

print(bigname, bigcount)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"split" => "You should use split() to break each line into words.",
"!cwen@iupui.edu" => "You need a for loop to read the data in the file.",
"if" => "You need to use one or more if statements to skip the lines that do not start with 'From '.",
"open" => "You need to use open() to open the file.")
),

"10.2" => Array(
"qtext" => "<b>10.2</b> Write a program to read through the <b>mbox-short.txt</b> and figure
out the distribution by hour of the day for each of the messages.  You can pull the hour
out from the 'From ' line by finding the time and then splitting the string a second time
using a colon.
<pre>
From stephen.marquard@uct.ac.za Sat Jan  5 <b>09</b>:14:16 2008
</pre>
Once you have accumulated the counts for each hour, print out the counts, sorted by hour
as shown below.",
"desired" => "04 3
06 1
07 1
09 2
10 3
11 6
14 1
15 2
16 4
17 2
18 1
19 1",
"code" => 'name = input("Enter file:")
if len(name) < 1:
    name = "mbox-short.txt"
handle = open(name)
',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 5 : continue
    if wds[0] != "From" : continue
    when = wds[5]
    tics = when.split(":")
    if len(tics) != 3 : continue
    hour = tics[0]
    counts[hour] = counts.get(hour,0) + 1

lst = counts.items()
lst.sort()

for key, val in lst :
    print(key, val)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"sort" => "You need to use list sort() method to sort the list of times.")
),

"11.1" => Array (
"qtext" => '<b>11.1</b> Sadly, the autograder does not support the regular expression library.
So please write a program that computes the
<b>Answer to the Ultimate Question of Life, the Universe, and Everything</b>
[<a href="http://www.youtube.com/watch?v=aboZctrHfK8" target="_blank">more detail</a>].
Sample output is below.',
"desired" => "42",
"code" => '',
"checks" => Array(
"print" => "By now you should know that a print statement would be helpful here.",
"*" => "I think that multiplication is involved..."
)),

"11.9" => Array(
"qtext" => "<b>11.9</b> Write a program to prompt the user for a regular expression
and read through the <b>mbox-short.txt</b> and count the number of lines that match
the regular expression using re.search().",
"desired" => "04 3
19 1",
"code" => 'import re

string = input("Enter a regular expression:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open("mbox-short.txt")
count = 0
for line in handle:
    if re.search(string) : count = count + 1
print("mbox-short.txt had ", count, "lines that matched", string)

',
"xcode" => 'name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts = dict()
for line in handle:
    wds = line.split()
    if len(wds) < 5 : continue
    if wds[0] != "From" : continue
    when = wds[5]
    tics = when.split(":")
    if len(tics) != 3 : continue
    hour = tics[0]
    counts[hour] = counts.get(hour,0) + 1

lst = counts.items()
lst.sort()

for key, val in lst :
    print(key, val)
',
"checks" => Array(
"for" => "You need a for loop to read the lines in the file.",
"sort" => "You need to use list sort() method to sort the list of times.")
)


);
