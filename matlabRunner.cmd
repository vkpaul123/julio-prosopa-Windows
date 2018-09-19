@echo off
rem cd "C:\LaravelProject\julio-prosopa\public\matlabScripts"
SET filename=%1
SET imagename=%2
SET command1="features=[1111 testImageValuesFinderFunc(imread('%filename%'))];, csvwrite('C:\LaravelProject\julio-prosopa\storage\app\public\matlabLogFiles\%imagename%.txt', features');, exit"
@matlab -automation -sd C:\LaravelProject\julio-prosopa\public\matlabScripts -r %command1% -wait
rem cd "C:\LaravelProject\julio-prosopa"
echo filename
rem :loop
rem tasklist /fi "imagename eq MATLAB.exe" |find ":" > nul
rem if errorlevel 1 goto loop
exit