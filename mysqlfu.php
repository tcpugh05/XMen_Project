//Issac, write in this file


SELECT mutant.codename, powers.power FROM mutant, powers WHERE mutant.ID = power.PID;

SELECT mutant.codename, powers.power FROM mutant CROSS JOIN powers;

SELECT mutant.CodeName AS Mutant, mutant.level FROM mutant, powers WHERE powers.PID = mutatn.ID AND powers.power = 'Telepathy' ORDER by mutant.Level;

SELECT DISTINCT mutant.CodeName, powers.power, assoc.Association FROM mutant, powers, assoc WHERE mutant.ID = powers.PID AND mutant.ID = assoc.AID GROUP by mutant.CodeName;

SELECT mt.Codename, mt.Level, pw.power FROM mutant AS mt NATURAL JOIN powers AS pw WHERE pw.PID IN(SELECT ID FROM mutant WHERE level = 5);