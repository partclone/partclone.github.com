#!/bin/perl 
# 
# Copyright (C) 2002-2003 by NCHC, thomas at nchc org tw
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2, or (at your option)
# any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.

use strict;
my $APPLY_FILE = shift;
my $TMPL_FILE = "template-adv.html";
#my $TMPL_FILE = "template.html";
my ($TMPL_HEAD, $TMPL_TAIL, $SKIP) = load_block( $TMPL_FILE );
my ($OLD_HEAD, $OLD_TAIL, $KEEP_CONTENT) = load_block( $APPLY_FILE );


system("cp $APPLY_FILE $APPLY_FILE.`date +%F-%H-%M-%S`.bak");
open(APPLY, ">$APPLY_FILE") || die "Can't open file $APPLY_FILE : $!\n";
print APPLY "$TMPL_HEAD\n$KEEP_CONTENT\n$TMPL_TAIL\n";

sub load_block {
    my $LOAD_FILE=shift;
    my $LOAD="";

    open(LOAD, $LOAD_FILE) || die "Can't open file $LOAD_FILE : $!\n";


    my $ph="Thie is start of edit area";
    my $pt="Thie is end of edit area";

    my $head_content="";
    my $tail_content="";
    my $main_content="";

    my $head = 0;
    my $tail = 0;
    my $support = 0;

    foreach (<LOAD>){

        my $last_ph = $head;
        next if ($_ =~ m/^$/);
        if ( $_ =~ m/$ph/g ) {
            $head = 1;
        }
        if ( $_ =~ m/$pt/g ) {
            $tail = 1;
        }

        if ((($head == 0) && ($tail == 0)) || (($last_ph == 0) && ($tail == 0))){
            $head_content .= $_;
        } elsif (($head == 1) && ($tail == 1)) {
            $tail_content .=  $_;  
        } else {
            $main_content .= $_;    
        }

    }
    if (($head == 1) && ($tail == 1)){
        $support = 1;
    }
    close LOAD;


    if ( $support != 1 ){
        print "file format not support\n";
        exit;        
    } else {
        return $head_content, $tail_content, $main_content;
    }
}


