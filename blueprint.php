<html>
<body>
<?php

$connect=mysqli_connect('localhost:3307','root','','myminiproject');
if(mysqli_connect_errno($connect)){
echo "Failed to connect";
}else{
$sql = "TRUNCATE TABLE blueprintforqp";	 
$connect->query($sql);
}
	if(!empty($_POST['sk1']) && (!empty($_POST['one1']) || !empty($_POST['two1']) || !empty($_POST['three1']) || !empty($_POST['five1']))){ 
		$sk1=$_POST['sk1'];
		$one1=$_POST['one1'];
		$two1=$_POST['two1'];
		$three1=$_POST['three1'];
		$five1=$_POST['five1'];
		$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
		$stmt->bind_param("siiii",$sk1,$one1,$two1,$three1,$five1);
		$stmt->execute();
		}
		if(!empty($_POST['sk2']) && (!empty($_POST['one2']) || !empty($_POST['two2']) || !empty($three2=$_POST['three2']) || !empty($five2=$_POST['five2']))){
			$sk2=$_POST['sk2'];
			$one2=$_POST['one2'];
			$two2=$_POST['two2'];
			$three2=$_POST['three2'];
			$five2=$_POST['five2'];
			$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
			$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
			$stmt->execute();
			}
			if(!empty($_POST['sk3']) && (!empty($_POST['one3']) || !empty($two2=$_POST['two3']) || !empty($three2=$_POST['three3']) && !empty($five2=$_POST['five3']))){
				$sk2=$_POST['sk3'];
				$one2=$_POST['one3'];
				$two2=$_POST['two3'];
				$three2=$_POST['three3'];
				$five2=$_POST['five3'];
				$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
				$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
				$stmt->execute();
			    }
		        if(!empty($sk2=$_POST['sk4']) && (!empty($one2=$_POST['one4']) || !empty($two2=$_POST['two4']) || !empty($three2=$_POST['three4']) || !empty($five2=$_POST['five4']))){
					$sk2=$_POST['sk4'];
					$one2=$_POST['one4'];
					$two2=$_POST['two4'];
					$three2=$_POST['three4'];
					$five2=$_POST['five4'];
					$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
					$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
					$stmt->execute();
				    }
					if(!empty($sk2=$_POST['sk5']) && (!empty($one2=$_POST['one5']) || !empty($two2=$_POST['two5']) || !empty($three2=$_POST['three5']) || !empty($five2=$_POST['five5']))){
						$sk2=$_POST['sk5'];
						$one2=$_POST['one5'];
						$two2=$_POST['two5'];
						$three2=$_POST['three5'];
						$five2=$_POST['five5'];
						$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
						$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
						$stmt->execute();
						}
                        if(!empty($sk2=$_POST['sk6']) && (!empty($one2=$_POST['one6']) || !empty($two2=$_POST['two6']) || !empty($three2=$_POST['three6']) || !empty($five2=$_POST['five6']))){
							$sk2=$_POST['sk6'];
							$one2=$_POST['one6'];
							$two2=$_POST['two6'];
							$three2=$_POST['three6'];
							$five2=$_POST['five6'];
							$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
							$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
							$stmt->execute();
							}
                            if(!empty($sk2=$_POST['sk7']) && (!empty($one2=$_POST['one7']) || !empty($two2=$_POST['two7']) || !empty($three2=$_POST['three7']) || !empty($five2=$_POST['five7']))){								
								$sk2=$_POST['sk7'];
								$one2=$_POST['one7'];
								$two2=$_POST['two7'];
								$three2=$_POST['three7'];
								$five2=$_POST['five7'];
								$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
								$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
								$stmt->execute();
								}
                                if(!empty($sk2=$_POST['sk8']) && (!empty($one2=$_POST['one8']) || !empty($two2=$_POST['two8']) || !empty($three2=$_POST['three8']) || !empty($five2=$_POST['five8']))){							
									$sk2=$_POST['sk8'];
									$one2=$_POST['one8'];
									$two2=$_POST['two8'];
									$three2=$_POST['three8'];
									$five2=$_POST['five8'];
									$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
									$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
									$stmt->execute();
									}
                                    if(!empty($sk2=$_POST['sk9']) && (!empty($one2=$_POST['one9']) || !empty($two2=$_POST['two9']) || !empty($three2=$_POST['three9']) || !empty($five2=$_POST['five9']))){										
										$sk2=$_POST['sk9'];
										$one2=$_POST['one9'];
										$two2=$_POST['two9'];
										$three2=$_POST['three9'];
										$five2=$_POST['five9'];
										$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
										$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
										$stmt->execute();
										}				                    
                                        if(!empty($sk2=$_POST['sk10']) && (!empty($one2=$_POST['one10']) || !empty($two2=$_POST['two10']) || !empty($three2=$_POST['three10']) || !empty($five2=$_POST['five10']))){											
											$sk2=$_POST['sk10'];
											$one2=$_POST['one10'];
											$two2=$_POST['two10'];
											$three2=$_POST['three10'];
											$five2=$_POST['five10'];
											$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
											$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
											$stmt->execute();
											}
											if(!empty($sk2=$_POST['sk11']) && (!empty($one2=$_POST['one11']) || !empty($two2=$_POST['two10']) || !empty($three2=$_POST['three11']) || !empty($five2=$_POST['five11']))){											
												$sk2=$_POST['sk11'];
												$one2=$_POST['one11'];
												$two2=$_POST['two11'];
												$three2=$_POST['three11'];
												$five2=$_POST['five11'];
												$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
												$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
												$stmt->execute();
												}
												if(!empty($sk2=$_POST['sk12']) && (!empty($one2=$_POST['one12']) || !empty($two2=$_POST['two12']) || !empty($three2=$_POST['three12']) || !empty($five2=$_POST['five12']))){											
													$sk2=$_POST['sk12'];
													$one2=$_POST['one12'];
													$two2=$_POST['two12'];
													$three2=$_POST['three12'];
													$five2=$_POST['five12'];
													$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
													$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
													$stmt->execute();
													}
													if(!empty($sk2=$_POST['sk13']) && (!empty($one2=$_POST['one13']) || !empty($two2=$_POST['two13']) || !empty($three2=$_POST['three13']) || !empty($five2=$_POST['five13']))){											
														$sk2=$_POST['sk13'];
														$one2=$_POST['one13'];
														$two2=$_POST['two13'];
														$three2=$_POST['three13'];
														$five2=$_POST['five13'];
														$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
														$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
														$stmt->execute();
														}
														if(!empty($sk2=$_POST['sk14']) && (!empty($one2=$_POST['one14']) || !empty($two2=$_POST['two14']) || !empty($three2=$_POST['three14']) || !empty($five2=$_POST['five14']))){											
															$sk2=$_POST['sk14'];
															$one2=$_POST['one14'];
															$two2=$_POST['two14'];
															$three2=$_POST['three14'];
															$five2=$_POST['five14'];
															$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
															$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
															$stmt->execute();
															}
															if(!empty($sk2=$_POST['sk15']) && (!empty($one2=$_POST['one15']) || !empty($two2=$_POST['two15']) || !empty($three2=$_POST['three15']) || !empty($five2=$_POST['five15']))){											
																$sk2=$_POST['sk15'];
																$one2=$_POST['one15'];
																$two2=$_POST['two15'];
																$three2=$_POST['three15'];
																$five2=$_POST['five15'];
																$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																$stmt->execute();
																}
																if(!empty($sk2=$_POST['sk16']) && (!empty($one2=$_POST['one16']) || !empty($two2=$_POST['two16']) || !empty($three2=$_POST['three16']) || !empty($five2=$_POST['five16']))){											
																	$sk2=$_POST['sk16'];
																	$one2=$_POST['one16'];
																	$two2=$_POST['two16'];
																	$three2=$_POST['three16'];
																	$five2=$_POST['five16'];
																	$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																	$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																	$stmt->execute();
																	}
																	if(!empty($sk2=$_POST['sk17']) && (!empty($one2=$_POST['one17']) || !empty($two2=$_POST['two17']) || !empty($three2=$_POST['three17']) || !empty($five2=$_POST['five17']))){											
																		$sk2=$_POST['sk17'];
																		$one2=$_POST['one17'];
																		$two2=$_POST['two17'];
																		$three2=$_POST['three17'];
																		$five2=$_POST['five17'];
																		$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																		$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																		$stmt->execute();
																		}
																		if(!empty($sk2=$_POST['sk18']) && (!empty($one2=$_POST['one18']) || !empty($two2=$_POST['two18']) || !empty($three2=$_POST['three18']) || !empty($five2=$_POST['five18']))){											
																			$sk2=$_POST['sk18'];
																			$one2=$_POST['one18'];
																			$two2=$_POST['two18'];
																			$three2=$_POST['three18'];
																			$five2=$_POST['five18'];
																			$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																			$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																			$stmt->execute();
																			}
																			if(!empty($sk2=$_POST['sk19']) && (!empty($one2=$_POST['one19']) || !empty($two2=$_POST['two19']) || !empty($three2=$_POST['three19']) || !empty($five2=$_POST['five19']))){											
																				$sk2=$_POST['sk19'];
																				$one2=$_POST['one19'];
																				$two2=$_POST['two19'];
																				$three2=$_POST['three19'];
																				$five2=$_POST['five19'];
																				$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																				$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																				$stmt->execute();
																				}
																				if(!empty($sk2=$_POST['sk20']) && (!empty($one2=$_POST['one20']) || !empty($two2=$_POST['two20']) || !empty($three2=$_POST['three20']) || !empty($five2=$_POST['five20']))){											
																					$sk2=$_POST['sk20'];
																					$one2=$_POST['one20'];
																					$two2=$_POST['two20'];
																					$three2=$_POST['three20'];
																					$five2=$_POST['five20'];
																					$stmt = $connect->prepare("insert into blueprintforqp(SK,one,two,three,five) values(?,?,?,?,?)");
																					$stmt->bind_param("siiii",$sk2,$one2,$two2,$three2,$five2);
																					$stmt->execute();
																					}
																					$output=shell_exec("QuestionPaper.py");
																					echo $output;
	header('refresh:15;url=GQP.php');
?>

</body>
</html>
