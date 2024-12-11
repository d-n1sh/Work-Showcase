/*
 * I declare that this code was written by me. 
 * I do not copy or allow others to copy my code. 
 * I understand that copying code is considered as plagiarism.
 * 
 * Student Name: Muhammad Danish Bin Aziz
 * Student ID: 21012612
 * Class: W64P
 * Date/Time created: 17/1/2022 / 5pm
 */

public class Member {
	
	private int id;
	private String name;
	private char tier;
	
	public Member(int id, String name) {
		this.id = id;
		this.name = name;
		this.tier = 'B';
	}

	public Member(int id, String name, char tier) {
		this.id = id;
		this.name = name;
		this.tier = tier;
	}
	
	public int getId() {
		return id;
	}
	
	public String getName() {
		return name;
	}
	
	public char getTier() {
		return tier;
	}
	
}
