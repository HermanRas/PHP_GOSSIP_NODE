# PHP GOSSIP NODE
A PHP Project for running a Gossip protocol to sync gossip "DATA" across an shared network on an Eventual consistency bases

![Gossip Protocol](https://raw.githubusercontent.com/HermanRas/PHP_GOSSIP_NODE/master/img/GossipProtocol.png)
The protocol has no single point of failure like Centralized networks and removes the data overheads caused by a Fully connected network by only fetching missing data based on a shared ledger.

"PHP GOSSIP NODE" Based on [Gossip_protocol](https://en.wikipedia.org/wiki/Gossip_protocol) and 
[Eventual_consistency](https://en.wikipedia.org/wiki/Eventual_consistency) of data.

*`The node could be extended to keep change tracking if you replace MSG & SHA2 with a`* [Bock Chain](https://en.wikipedia.org/wiki/Blockchain) *`but that will not be added to this project`*


- [PHP GOSSIP NODE](#php-gossip-node)
	- [Gossip Node Quick Start](#gossip-node-quick-start)
	- [## Gossip Node Details](#h2-idgossip-node-details-438gossip-node-detailsh2)
		- [Node Properties](#node-properties)
	- [- GOSSIP_MAX_PEER_COUNT](#ulligossip_max_peer_countliul)
		- [DATA_SETS](#data_sets)
	- [GOSSIP_PROTOCOL](#gossip_protocol)
	- [Node Build](#node-build)
		- [Command line CLIENT / SERVER](#command-line-client--server)
		- [WEB CLEINT / SERVER](#web-cleint--server)


## Gossip Node Quick Start
1. To get started you need at least 2 nodes.
2. to register on the network you send a REGISTER_FUNCTION to any existing node with matching network and password
3. The receiving node will call back after the property gossip_timer time ran out.
4. As Part of the call back the remote node will do a HELLO_FUNCTION and DID_YOU_HERE function.
5. the now registered node will loop thru its gossip list, and complete a TELL_ME_MORE_FUNCTION to reach state of consistency 
6. the now registered node will call all other nodes after the property gossip_timer ran out, sending do a HELLO_FUNCTION and DID_YOU_HERE function to all the discovered nodes creating an infinite update & discover loop.

## Gossip Node Details
---
### Node Properties
- NODE_GUID
- NODE_NAME
- NETWORK_NAME
- NETWORK_PASSWORD
- IP
- PORT
- GOSSIP_TIMER
- GOSSIP_MAX_PEER_COUNT
---
### DATA_SETS
- PEER_NODE_LIST
	- GUID
	- NAME
	- IP
	- PORT
	- NETWORK_NAME

- GOSSIP
	- GUID
	- DATE_TIME
	- WHO_NAME
	- MSG
	- SHA2
---
## GOSSIP_PROTOCOL
- SERVER_FILES_FUNCTION
	- update or create server.json to set server properties
- REGISTER_FUNCTION
	- first time register this node to an remote node with network name and password manually
	- loop thru node_list and register this NODE
- HELLO_FUNCTION
	- loop thru peer list sending all known NODEs & NETWORK_NAMEs without passwords
- DID_YOU_HERE
	- loop thru peer list for my networks sending all GOSSIP_GUIDs
- TELL_ME_MORE_FUNCTION
	- loop thru received GOSSIP_GUIDs, retrieving all data for from node that shared it using NODE_GUID
- NETWORK_STATUS_FUNCTION
	- Show all NODES on this NETWORK_NAME that this nodes knows
- GOSSIP_STATUS_FUNCTION
	- Show all GOSSIP and include SHA2 if data complete
---
## Node Build
### Command line CLIENT / SERVER
- CLEINT:
	```
	- CREATE_GOSSIP
	- REGISTER_FUNCTION
	- NETWORK_STATUS_FUNCTION
	- GOSSIP_STATUS_FUNCTION
	```

-  SERVER_NODE LOOP:
	```
	- HELLO_FUNCTION
	- DID_YOU_HERE
	- TELL_ME_MORE_FUNCTION
	```
	
- CREATE
	```
	SERVER_FILES_FUNCTION
	```
	
### WEB CLEINT / SERVER
- CLIENT
	```
	- CREATE_GOSSIP
	- REGISTER_FUNCTION
	- NETWORK_STATUS_FUNCTION
	- GOSSIP_STATUS_FUNCTION
	```
	
- SERVER
	```
	- RECIEVE_NETWORK_STATUS
	- RECIEVE_GOSSIP_STATUS
	- RECEIVE_REGISTER
	- RECEIVE_HELLO
	- RECEIVE_DID_YOU_HERE
	- RECIEVE_TELL_ME_MORE
	```
---



