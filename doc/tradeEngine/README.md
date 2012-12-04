#Full Guide to the Trade Engine

This is meant to be a complete guide to everything the trade engine does. It should link all important sources, from simply using the trade engine, to the architecture needed for someone to start developing. 

##What the heck is the Trade Engine?

Before you start tampering with any of the code, you should know what the engine does. You can find this information here: 

[Trade Engine Architecture](design/TradeEngineArchitecture.md)

You will also probably hear this several times, but the Trade Engine 'Looper' is different than the Trade Engine 'WebService'. The Looper is written in java, and executes trades. The WebService is php, and queues the trades. 

##I want to get the Trade Engine Running!

The Trade Engine should automatically start up when you run the build script in /src/build/. If for some reason the build scripts don't work, or you want to write your own special scripts, check out these links:

[Looper](TradeEngineControls.md)
WebService -- There currently aren't docs for this. 

##I want to modify/improve/write code for the Trade Engine!

You can look at design docs for the looper [here](design/LooperImplementation.md). They will give you a basic idea of how the Looper works without getting too complicated or looking at any code. The code itself is fairly well documented too. All of the java files in /src/te belong to the looper. 

There currently aren't docs for the WebService that I know of. I'm also not sure if the php files used are the ones in /src/te or src/te/service. 

I hope these docs help. Good luck!