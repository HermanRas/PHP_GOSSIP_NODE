# PHP_GOSSIP_NODE
A PHP Project for running a Gossip protocol to sync gossip "DATA" across an shared network  on an Eventual consistency bases

https://en.wikipedia.org/wiki/Gossip_protocol
https://en.wikipedia.org/wiki/Eventual_consistency

#GOSSIP_NODE_DETAILS
##Properties
-NODE_GUID
-NODE_NAME
-NETWORK_NAME
-NETWORK_PASSWORD
-IP
-PORT
-GOSSIP_TIMER
-GOSSIP_MAX_PEER_COUNT

##DATA_SETS
-PEER_NODE_LIST
--GUID
--NAME
--IP
--PORT
--NETWORK_NAME

-GOSSIP
--GUID
--DATE_TIME
--WHO_NAME
--MSG
--SHA2

##GOSSIP_PROTOCOL
-SERVER_FILES_FUNCTION
--update or create server.json to set server properties

-REGISTER_FUNCTION
--first time register this node to an remote node with network name and password manually
--loop thru node_list and register this NODE

-HELLO_FUNCTION
--loop thru peer list sending all known NODEs & NETWORK_NAMEs without passwords

-DID_YOU_HERE
--loop thru peer list for my networks sending all GOSSIP_GUIDs

-TELL_ME_MORE_FUNCTION
--loop thru received GOSSIP_GUIDs, retrieving all data for from node that shared it using NODE_GUID

-NETWORK_STATUS_FUNCTION
--Show all NODES on this NETWORK_NAME that this nodes knows

--GOSSIP_STATUS_FUNCTION
--Show all GOSSIP and include SHA2 if data complete


##CLEINT SERVER
CMD CLIENT / SERVER
	START CLEINT{
	-CREATE_GOSSIP
	-REGISTER_FUNCTION
	-NETWORK_STATUS_FUNCTION
	-GOSSIP_STATUS_FUNCTION
	}
	
	START SERVER_NODE LOOP{
	-HELLO_FUNCTION
	-DID_YOU_HERE
	-TELL_ME_MORE_FUNCTION
	}
	
	CREAT SERVER_FILES_FUNCTION
	
WEB CLEINT / SERVER
	CLEINT{
	-CREATE_GOSSIP
	-REGISTER_FUNCTION
	-NETWORK_STATUS_FUNCTION
	-GOSSIP_STATUS_FUNCTION
	}
	
	SERVER{
	-RECIEVE_NETWORK_STATUS
	-RECIEVE_GOSSIP_STATUS
	-RECEIVE_REGISTER
	-RECEIVE_HELLO
	-RECEIVE_DID_YOU_HERE
	-RECIEVE_TELL_ME_MORE
	}

#Gossip
for a gossip network to get started you need at least 2 nodes
to register on the network you send a register to any existing node with matching network and password
the receiving node will call back after the gossip_timer ran out and do a HELLO_FUNCTION and DID_YOU_HERE function
after receiving a gossip list this node will complete a tell me more and a state of consistency will be reached


