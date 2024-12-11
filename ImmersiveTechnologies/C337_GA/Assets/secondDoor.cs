using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class secondDoor : MonoBehaviour
{
    public gameControlScript gc;
    public GameObject door;

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    public void OpenDoor()
    {
        if (gc.GetButton3() == true)
        {
            gc.PlayOpenSound();
            door.SetActive(false);
        }
        else
        {
            gc.PlayLockSound();
        }
    }

}
