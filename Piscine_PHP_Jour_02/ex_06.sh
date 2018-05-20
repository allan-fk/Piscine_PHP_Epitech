#!/bin/bash
blih -u allan.klein@epitech.eu repository create $1
blih -u allan.klein@epitech.eu repository setacl $1 ramassage-tek r
blih -u allan.klein@epitech.eu repository getacl $1
