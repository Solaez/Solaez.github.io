@echo off

:: Cambiar directorio a la carpeta de Office
cd /d "%ProgramFiles%\Microsoft Office\Office16" || cd /d "%ProgramFiles(x86)%\Microsoft Office\Office16" || goto :error

:: Instalar las licencias
for /f %%x in ('dir /b ..\root\Licenses16\ProPlus2019VL*.xrm-ms') do cscript ospp.vbs /inslic:"..\root\Licenses16\%%x" || goto :error

:: Configurar puerto y claves
cscript ospp.vbs /setprt:1688 || goto :error
cscript ospp.vbs /unpkey:6MWKP >nul || goto :error
cscript ospp.vbs /inpkey:NMMKJ-6RK4F-KMJVX-8D9MJ-6MWKP || goto :error
cscript ospp.vbs /sethst:e8.us.to || goto :error
cscript ospp.vbs /act || goto :error

:: Mensaje de exito
echo MsgBox "Activacion completada exitosamente.", 64, "Exito" > "%temp%\msgbox.vbs"
cscript //nologo "%temp%\msgbox.vbs"
del "%temp%\msgbox.vbs"
exit /b 0

:error
:: Mensaje de error
echo MsgBox "Error durante la activacion.", 16, "Error" > "%temp%\msgbox.vbs"
cscript //nologo "%temp%\msgbox.vbs"
del "%temp%\msgbox.vbs"
exit /b 1
