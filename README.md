# dynamicdropdown

use 5.010;
use strict;
use warnings;
use Data::Dumper qw(Dumper);
 
my %scores_of;
 
 
my @array = (["1","2"],["3","4"],["10","11"]);
my @ar3 = (["5", "6"],["7", "8"]);
my @ar2 = ("Orange", "apple");
 


push(@{$array[0]}, @ar2);
push(@array, @ar3);
 

print Data::Dumper->Dump(\@array);
