using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class rapierScript : MonoBehaviour
{
    bool touchingGlass = false;
    public GameObject Sword;

    // Start is called before the first frame update
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {
        
    }

    void OnTriggerEnter(Collider other)
    {
        if (other.CompareTag("brokenglassTag"))
        {
            touchingGlass = true;
        }
    }

    void OnTriggerExit(Collider other)
    {
        if (other.CompareTag("brokenglassTag"))
        {
            touchingGlass = false;
        }
    }

}
