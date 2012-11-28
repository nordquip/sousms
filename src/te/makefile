# makefile
# By Garrett Skelton
#  lazorpwnage@gmail.com
#  7 November 2012

# Flags to use when compiling 
# (initiall empty, set to -g when we want to debug)
FLAGS = 
COMPILER = javac
# Compile rule
.SUFFIXES: .java .class
.java.class:
	$(COMPILER) $(FLAGS) $*.java

# Add source files here
CLASSES = 	Engine.java \
		Executor.java \
		ConfigData.java \
		Order.java \
		Buy.java \
		Sell.java \
		*.java
#Critical files are listed explicitly, but we'll add *.java
#in case we add more order java files. They don't have dependencies,
#so Order files won't automatically be compiled in the above list.

# default rule to use
default: classes

# set up the connection from the file intput to the compile rule
classes: $(CLASSES:.java=.class)

# debug specific stuff. sets a flag, then compiles as normal
debug: FLAGS += -g
debug: classes

# delete all .class files to clean
clean:
	$(RM) *.class *.log
