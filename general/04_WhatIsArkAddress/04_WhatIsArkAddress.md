# What is ARK address

## Foreword

Blockchain is a database where records are stored after a concensus processed by node network. The unit record used in this process is a peer to peer transaction containing informations such as `vendorField`, `asset`, `amount` and `fee`. Because it is peer to peer, accounts need to be identified and there comes the ARK addresses.

## All is about passphrase

## Schematic diagram

```mermaid
graph LR
M(Modifier)
P[Passphrase] -- SHA 256 --> S(seed)

   S --> T{Ecdsa SECP256k1}
   T --> P1>public key]
   T --> P2>private key]

   P1 --> R{ripemd 160}
   R -- slice from 0 to 20 --> O{+}
   M --> O

   O -- base58 encode_check --> A((ARK address))
```

## ARK are stored on address

## Dive more

## FAQ

