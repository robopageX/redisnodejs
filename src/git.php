<h3>GIT</h3>
<br>
git --version
<br><br>
git config --global user.email "ico@tronbotix.com"
<br><br>
git config --global user.name "tronbotix"
<br><br>
git status
<br><br>
Ein Git Repository anlegen
<br><br>
Es gibt grundsätzlich zwei Möglichkeiten, ein Git Repository auf dem eigenen Rechner anzulegen.
<br><br>
Erstens kann man ein existierendes Projekt oder Verzeichnis in ein neues Git Repository importieren.
<br><br>
Zweitens kann man ein existierendes Repository von einem anderen Rechner, der als Server fungiert, auf den eigenen Rechner klonen.
<br><br>
Ein existierendes Verzeichnis als Git Repository initialisieren.
<br><br>
Wenn Du künftige Änderungen an einem bestehenden Projekt auf Deinem Rechner mit Git versionieren und nachverfolgen willst,
kannst Du dazu einfach in das jeweilige Verzeichnis wechseln und diesen Befehl ausführen:
<br><br>

<br><br>
Die drei Zustände

Jetzt aufgepasst. Es folgt die wichtigste Information, die Du Dir merken musst, 
wenn Du Git kennen lernen willst und Fallstricke vermeiden willst. 
<br><br>
Git definiert drei Haupt-Zustände, in denen sich eine Datei befinden kann: committed, modified („geändert“) und staged („vorgemerkt“). 
„Committed“ bedeutet, dass die Daten in der lokalen Datenbank gesichert sind. 
<br><br>
„Modified“ bedeutet, dass die Datei geändert, diese Änderung aber noch nicht committed wurde. 
<br>
„Staged“ bedeutet, dass Du eine geänderte Datei in ihrem gegenwärtigen Zustand für den nächsten Commit vorgemerkt hast.
<br><br>

git init
<br><br>
git add *FILE*
<br>
git add .
<br><br>
git commit -m "TESTCOMMIT"
<br><br>
.gitignore // Dateianlegen mit exclude Daten
<br><br>
git config --global core.editor nano
<br><br>
git config --list // Alle Einstellungen Anzeigen
<br><br>
git config user.name
<br><br>
git help <verb>
git <verb> --help
man git-<verb>
<br><br>
git reset HEAD 'DATEI'
<br><br>
git log
<br><br>
git log --stat
<br><br>
git log -n 2
<br><br>
git log -n 1
<br><br>
git log --after "2018-11-23"
<br><br>
git log --after "2018-11-23" --before "2017-11-25"
<br><br>
git checkout branch
<br><br>
git checkout -b "name" // Checkout und neuen Branch erstellen
<br><br>
git merge version2
<br><br>
git log --oneline --decorate
<br><br>
mergekonflikte manuell ändern!
<br><br>
git branch --merged
<br><br>
git branch -d version2 // löschen von branch
<br><br>
git branch -D version2 // löschen ohne fehlermeldung
<br><br>
git push
<br><br>
git fetch
<br><br>
git pull
<br><br>
git revert
<br><br>
git commit --amend
<br><br>

<br><br>

<br><br>

git erzeugen
änderungen commite
dateien ausschliessen
mehrere dateien commite
History
Branches
merge
merge commit
Remotes
Auf GitHUb Öffentlich machen
Klonen eines Repository
Rebase