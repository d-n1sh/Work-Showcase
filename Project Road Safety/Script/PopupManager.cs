using UnityEngine;

public class PopupManager : MonoBehaviour
{
    private Readxml xl;
    public bool isChecked;
   // public bool isDemo;
    public static int activatePopups = 1; // This flag controls whether popups are disabled or not
    //public static int demo = 1;
    void Awake()
    {
        xl = GetComponent<Readxml>();
    }

    void Start()
    {
        Debug.Log("activatePopups is set to: " + activatePopups); // Debugging statement

        if (activatePopups == 1) // Check if popups should be disabled (assuming 0 means disabled)
        {
            xl.tutorialPage.SetActive(false);
            xl.panel.SetActive(false);
            isChecked = true;
            xl.DisableAllPopupsPermanently();
        } else
        {
            xl.panel.SetActive(true);
            xl.tutorialPage.SetActive(true);
            isChecked= false;
        }

        /*if (demo == 1)
        {
            isDemo = true;
        } else
        {
            isDemo = false;
        }*/
        // Optionally, you can add an 'else' block here if you want to enable popups.
    }
}
