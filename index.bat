@echo off
setlocal enabledelayedexpansion

REM List of files to commit (you can adjust this list)
set files[0]=about_us.php
set files[1]=create.php
set files[2]=fixtures.php
set files[3]=how_it_works.php
set files[4]=index.php
set files[5]=join_tour.php

REM Today's date
for /f %%i in ('powershell -Command "Get-Date -Format yyyy-MM-dd"') do set today=%%i

REM Loop to backdate and commit files for the past 6 days
for /l %%i in (0,1,5) do (
    REM Get the date for (6 - i) days ago
    for /f %%d in ('powershell -Command "(Get-Date).AddDays(-6 + %%i).ToString(\"yyyy-MM-ddT12:00:00\")"') do set commitDate=%%d

    echo Committing !files[%%i]! on !commitDate!

    git add "!files[%%i]!"
    set GIT_AUTHOR_DATE=!commitDate!
    set GIT_COMMITTER_DATE=!commitDate!
    git commit
