@echo off

SET BASE_FOLDER=C:\Arquivos de programas\NetMake\v7\wwwroot\nfe_infoco\homologacao
SET FOLDER=%BASE_FOLDER%\pdf\*.pdf
SET FOLDER_BK=%BASE_FOLDER%\pdf\%date:~10,4%_%date:~7,2%_%date:~4,2%\
SET IP_PRINTER=192.168.16.48
SET PRINTER="Plexmark"

echo %FOLDER_BK%
echo %FOLDER%
pause

MD "%FOLDER_BK%"

:LOOP



if exist "%FOLDER%" (

FOR %%f IN ( "%FOLDER%" )  DO (

lpr -S %IP_PRINTER% -P %PRINTER% -o l "%%f"

move "%%f" "%FOLDER_BK%"

)


)

GOTO :LOOP