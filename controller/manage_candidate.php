<?php
session_start();
include abspath().'/model/candidates.php';

function loadAllCandidates(){
	return getAllCandidates();
}