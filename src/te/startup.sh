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
PROGRAM="Engine"


COMMAND="nohup $JAVA $PROGRAM"
pidFile="$PROGRAM.pid"
shutdownFile="shutdown"
 
 

function checkStatus {
    if [ ! -e "$pidFile" ]; then return 1; fi
    local pid="$(<$pidFile)"
    if [ "$pid" = "" ]; then return 1; fi
    #Sends kill signal 0, basically the 'are you there?' signal.
    #Replacement for pgrep, since some systems don't have it.
    #pgrep "$pid"
    kill -s 0 "$pid" &> /dev/null
    if [ $? -eq 1 ]; then return 1; fi
    return 0; 
}
 
 
function do_start {
    checkStatus
    if [ $? -eq 0 ]; then echo "$PROGRAM is already running."; return 0; fi
    #Uncomment if you wish to use logging
    `$COMMAND` &> /dev/null & 
    # 
    echo $! > $pidFile
    sleep 1.5
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
    if [ $? -ne 0 ]; 
    then 
        echo "$PROGRAM is not running";
        rm $pidFile $shutdownFile &> /dev/null
        return 1; 
    fi
    touch "$shutdownFile"
    sleep 1.5
    checkStatus
    if [ $? -ne 1 ]
    then
        echo "$PROGRAM shutdown failed."
        return 1;
    else
        echo "$PROGRAM STOPPED"
        rm $pidFile $shutdownFile &> /dev/null
        return 0;
    fi
   }
   
function do_force_stop {
    checkStatus
    if [ $? -ne 0 ]; 
    then 
        echo "$PROGRAM is not running";
        rm $pidFile $shutdownFile &> /dev/null
        return 1; 
    fi
    #NOTE -- This will probably have to be changed in the future, since
    # outright murdering our executor will probably leave it in an unstable
    # state.
    local pid=$(<$pidFile)
    kill $pid
    checkStatus
    if [ $? -ne 1 ]
    then
        echo "$PROGRAM force shutdown failed."
        return 1;
    else
        echo "$PROGRAM STOPPED"
        rm $pidFile $shutdownFile &> /dev/null
        return 0;
    fi
    
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
    forcestop)
        do_force_stop
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
        echo "Usage: $0 {start|stop|forcestop|restart|status}"
        exit 1
        ;;
esac

 
