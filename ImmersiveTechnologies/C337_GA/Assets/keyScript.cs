using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class keyScript : MonoBehaviour
{
    bool touchingDoor = false;
    public GameObject Key;

    // Start is called before the first frame update
    void Start()
    {
        Key.SetActive(true);
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    void OnTriggerEnter(Collider other)
    {
        if (other.CompareTag("door1") == true)
        {
            touchingDoor = true;
            Key.SetActive(false);
        }
    }

    void OnTriggerExit(Collider other)
    {
        if (other.CompareTag("door1"))
        {
            touchingDoor = false;
            Key.SetActive(true);
        }
    }

}