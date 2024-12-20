using UnityEngine;
using UnityEngine.UI;

public class ButtonScript : MonoBehaviour
{
    private Toggle toggle;
    //private Toggle demo;
    private string toggleKey = "ToggleState"; // Key for PlayerPrefs
    //private string demoKey = "ToggleState";
    private void Start()
    {
        toggle = GetComponent<Toggle>();
        //demo = GetComponent<Toggle>();
        // Load the toggle state from PlayerPrefs and set it on the toggle
        if (PlayerPrefs.HasKey(toggleKey))
        {
            bool savedToggleState = PlayerPrefs.GetInt(toggleKey) == 1;
            toggle.isOn = savedToggleState;
        }
    }

    public void ToggleValueChanged()
    {
        // Save the toggle state to PlayerPrefs when it changes
        int toggleState = toggle.isOn ? 1 : 0;
        PlayerPrefs.SetInt(toggleKey, toggleState);
        PlayerPrefs.Save();

        PopupManager.activatePopups = toggleState;

        // Handle your game logic based on the toggle state here

        // Log the toggle state
        Debug.Log("Toggle State: " + toggle.isOn);
    }

    /*public void DemoToggle()
    {
        int demoState = demo.isOn ? 1 : 0;
        PlayerPrefs.SetInt(demoKey, demoState);
        Debug.Log(demoState);
        PopupManager.activatePopups = demoState;
        Debug.Log("Demo State: " + demo.isOn);
    }*/
}

