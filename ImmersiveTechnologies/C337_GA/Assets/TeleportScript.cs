using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TeleportScript : MonoBehaviour
{
    public GameObject telepad;

    // Start is called before the first frame update
    void Start()
    {
        HideTelepad();
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    public void ShowTelepad()
    {
        telepad.SetActive(true);
    }

    public void HideTelepad()
    {
        telepad.SetActive(false);
    }

}
