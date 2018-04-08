# What is ARK address

## Foreword

**Cryptography**

In blockchain, an account is defined by the possibility to sign data using a `private key` and to provide a `public key` letting everyone check signature issued with the `private key`. It is a proof of ownership. Cryptography allow this kind of dual keys and ARK uses [SECP256k1](https://en.bitcoin.it/wiki/Secp256k1) curve with [eliptic curve digital signature algorithm](https://en.wikipedia.org/wiki/Elliptic_Curve_Digital_Signature_Algorithm) (ECDSA).

ECDSA generates `private key` and `public key` from a unique 32-bytes-size `seed`. This `seed` is not very human readable so it is generated from something more handy&nbsp;: the `passphrase`.

**Passphrase**

`passphrase` is a simple text. In blockchain, it is generaly made of twelve words according to [Bitcoin Improvement Protocol #39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki) (BIP39). It is not mandatory since a `seed` can be generated from one single char… But the more complex it is, the more it secures the account.

```python
>>> import hashlib
>>> # seed generated from a single char
>>> hashlib.sha256("a".encode("utf-8")).hexdigest()
'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'
>>> # seed generated from a simple passphrase
>>> hashlib.sha256("a stronger passphrase".encode("utf-8")).hexdigest()
'1be075706dd9f09c91b8506701ef88cac64b5c6a307b9b7ec83790bd8f2be130'
```

**From passphrase to private and public keys**

![Diagram 001](https://github.com/Moustikitos/docs/blob/master/assets/img/arkDiagram04-001.png)

## ARK address

Blockchain is a database where records are stored after a concensus proceeded by network nodes. The unitary element used in this process is an account to account transaction containing informations such as `vendorField`, `asset`, `amount` and `fee`. Account needs to be identified and here comes the `address`.

**From public key to ARK address**

Ark `address` is derived from the `public key`.

![Diagram 002](https://github.com/Moustikitos/docs/blob/master/assets/img/arkDiagram04-002.png)

As we can see on the chart above, it is impossible to find `passphrase` from `address`, even with brute force computation, because of the `slice` applied during the flow. `modifier` is a byte used to customize the `address`. It is usefull to differenciate networks.

For example&nbsp;:
 + On ARK mainnet `modifier` = `0x17` so ARK address starts with `A`
 + On ARK devnet `modifier` = `0x1e` so DARK address starts with `D`
 + On KAPU mainnet `modifier` = `0x2d` so KAPU address starts with `K`

Here is the table giving the address start char according to hexadecimal `modifier` value&nbsp;:

|hex|start char|hex|start char|hex|start char|hex|start char|hex|start char|
|:-:|:--------:|:-:|:--------:|:-:|:--------:|:-:|:--------:|:-:|:--------:|
|00 |1         |10 |7         |20 |D or E    |30 |L         |40 |S or T    |
|01 |Q or o    |11 |7 or 8    |21 |E         |31 |L or M    |41 |T         |
|02 |o or 2    |12 |8         |22 |E or F    |32 |M         |42 |T         |
|03 |2         |13 |8 or 9    |23 |F         |33 |M         |43 |T or U    |
|04 |2 or 3    |14 |9         |24 |F         |34 |M or N    |44 |U         |
|05 |3         |15 |9         |25 |F or G    |35 |N         |45 |U or V    |
|06 |3         |16 |9 or A    |26 |G         |36 |N or P    |46 |V         |
|07 |3 or 4    |17 |A         |27 |G or H    |37 |P         |47 |V         |
|08 |4         |18 |A or B    |28 |H         |38 |P         |48 |V or W    |
|09 |4 or 5    |19 |B         |29 |H         |39 |P or Q    |49 |W         |
|0a |5         |1a |B         |2a |H or J    |3a |Q         |4a |W or X    |
|0b |5         |1b |B or C    |2b |J         |3b |Q or R    |4b |X         |
|0c |5 or 6    |1c |C         |2c |J or K    |3c |R         |4c |X         |
|0d |6         |1d |C or D    |2d |K         |3d |R         |4d |X or Y    |
|0e |6 or 7    |1e |D         |2e |K         |3e |R or S    |4e |Y         |
|0f |7         |1f |D         |2f |K or L    |3f |S         |4f |Y or Z    |

|hex|start char|hex|start char|hex|start char|hex|start char|hex   |start char|
|:-:|:--------:|:-:|:--------:|:-:|:--------:|:-:|:--------:|:----:|:--------:|
|50 |Z         |60 |f or g    |70 |n         |80 |t         |90    |z or 2    |
|51 |Z         |61 |g         |71 |n         |81 |t or u    |&ge;91|2         |
|52 |Z or a    |62 |g         |72 |n or o    |82 |u         |
|53 |a         |63 |g or h    |73 |o         |83 |u or v    |
|54 |a or b    |64 |h         |74 |o or p    |84 |v         |
|55 |b         |65 |h or i    |75 |p         |85 |v         |
|56 |b or c    |66 |i         |76 |p         |86 |v or w    |
|57 |c         |67 |i         |77 |p or q    |87 |w         |
|58 |c         |68 |i or j    |78 |q         |88 |w or x    |
|59 |c or d    |69 |j         |79 |q or r    |89 |x         |
|5a |d         |6a |j or k    |7a |r         |8a |x         |
|5b |d or e    |6b |k         |7b |r         |8b |x or y    |
|5c |e         |6c |k         |7c |r or s    |8c |y         |
|5d |e         |6d |k or m    |7d |s         |8d |y or z    |
|5e |e or f    |6e |m         |7e |s or t    |8e |z         |
|5f |f         |6f |m or n    |7f |t         |8f |z         |

## Dive more

### Wallet and address

### Cold address 

### BIP39

TODO&nbsp;: security of BIP39 passphrase

### BIP32

## FAQ

