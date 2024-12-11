using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class mazeScript : MonoBehaviour
{
    public gameControlScript gc;
    public GameObject mazeDoor;

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
        gc.PlayOpenSound();
        mazeDoor.SetActive(false);
    }

}
