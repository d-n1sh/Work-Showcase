package sg.edu.rp.c346.id21012612.ese;

import java.util.ArrayList;

public class Comic {

    private String issue;
    private ArrayList<String> creators;

    public Comic(String issue, ArrayList<String> creators) {
        this.issue = issue;
        this.creators = creators;
    }

    public String getIssue() {
        return issue;
    }

    public void setIssue(String issue) {
        this.issue = issue;
    }

    public ArrayList<String> getCreators() {
        return creators;
    }

    public void setCreators(ArrayList<String> creators) {
        this.creators = creators;
    }

    @Override
    public String toString() {
        return "Comic{" +
                "issue='" + issue + '\'' +
                ", creators=" + creators +
                '}';
    }
}
