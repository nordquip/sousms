#!/bin/bash
# 
#Written by Nickolaus D. Saint
#
#Description -- Start up script for the SOUSMS Executor, written in java.
#It is a simple init-like script for starting the executor. I'm afraid it's
#a linux only solution too. Windows users will have to run the executor
#manually.
#
#Note: Script was written before the Executor was, so it may need
# to be modified before it will properly work

 
#VARIABLES
#JAVA -- is the java install you want to use. Default 'java' will probably 
#work.
#PROGRAM -- is the name of the program we're running. Probably 'Executor'
# or 'Main' Note: Leave the '.class' part off the filename, java does not
# like it.
JAVA="java"
PROGRAM=""


COMMAND="nohup $JAVA $PROGRAM"
LOG="$PROGRAM.log"
pidFile="$PROGRAM.pid"
 
 

function checkStatus {
    if [ ! -e "$pidFile" ]; then return 1; fi
    local pid="$(<$pidFile)"
    if [ "$pid" = "" ]; then return 1; fi
    #Sends kill signal 0, basically the 'are you there?' signal.
    #Replacement for pgrep, since some systems don't have it.
    #pgrep "$pid"
    kill -s 0 "$pid" > /dev/null 2>&1
    if [ $? -eq 1 ]; then return 1; fi
    return 0; 
}
 
 
function do_start {
    checkStatus
    if [ $? -eq 0 ]; then echo "$PROGRAM is already running."; return 0; fi
    `$COMMAND` >> log 2>&1 & 
    echo $! > $pidFile
    sleep 0.3
    pid="$(<$pidFile)"
    if checkStatus $pid; 
    then
        echo "$PROGRAM STARTED"
        return 0; 
    else
        echo "$PROGRAM start FAILED"
        return 1
    fi
    return 0; 
    }
 
function do_stop {
    checkStatus
    if [ $? -ne 0 ]; then echo "$PROGRAM is not running"; return 0; fi
    #NOTE -- This will probably have to be changed in the future, since
    # outright murdering our executor will probably leave it in an unstable
    # state.
    local pid=$(<$pidFile)
    kill $pid
    rm "$pidFile"
    echo "$PROGRAM STOPPED"
    #Instead, the executor will probably shutdown by itself when it detects
    # this file
    #echo "yes" > shutdown
   }

if [ "$PROGRAM" = "" ];
    then
    echo "Configure variables in TE Executor $0 script before it can be used.";
    exit 1;
fi

 
case "$1" in
    start)                
        do_start
        exit $?
        ;;
    stop)               
        do_stop
        exit $?
        ;;
    restart)                
        do_stop && do_start
        exit $?
        ;;
    status)                          
        checkStatus
        if [ $? -eq 1 ]; 
        then
            echo "$PROGRAM is not running." 
            exit 1;
        else
            echo "$PROGRAM is running."
            exit 0;
        fi
        ;;
    *)
        echo "Usage: $0 {start|stop|restart|status}"
        exit 1
        ;;
esac

 
