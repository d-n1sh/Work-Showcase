using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class FaScript : MonoBehaviour
{
    public gameControlScript gc;

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    public void PressButton()
    {
        transform.position = new Vector3(transform.position.x - 0.01f, transform.position.y, transform.position.z);
        gc.PlayClickSound();
    }

    public void ReleaseButton()
    {
        if (gc.GetButton6() == true)
        {
            gc.SetButton7(true);
            gc.PlayFaSound();
            GetComponent<BoxCollider>().enabled = false;
        }
        else
        {
            transform.position = new Vector3(transform.position.x + 0.01f, transform.position.y, transform.position.z);
            gc.PlayClickSound();
            gc.PlayFaSound();
        }
    }

}
